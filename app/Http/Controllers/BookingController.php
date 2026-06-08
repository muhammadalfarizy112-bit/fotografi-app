<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\PaketFoto;

class BookingController extends Controller
{
    public function index()
{
    // kalau admin → lihat semua booking
    if(auth()->user()->role == 'admin') {

        $booking = Booking::with(['user', 'paket'])->get();

    } 
    
    // kalau user → hanya lihat booking sendiri
    else {

        $booking = Booking::with(['user', 'paket'])
                    ->where('id_user', auth()->user()->id_user)
                    ->get();
    }

    return view('booking.index', compact('booking'));
}
    public function create()
    {
        $paket = PaketFoto::all();

        return view('booking.create',
            compact('paket'));
    }

    public function store(Request $request)
{
    \App\Models\Booking::create([

        'id_user' => auth()->user()->id_user,

        'id_paket' => $request->paket,

        'tanggal_booking' => $request->tanggal,

        'lokasi' => $request->lokasi,

        'status' => 'pending'

    ]);

    return redirect('/booking')
            ->with('success', 'Booking berhasil dibuat');
}

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        return redirect('/booking');
    }

    public function updateStatus(Request $request, $id)
    {
    $booking = Booking::findOrFail($id);

    $booking->status = $request->status;

    $booking->save();

    return redirect('/booking')
            ->with('success', 'Status booking berhasil diupdate');
    }
}