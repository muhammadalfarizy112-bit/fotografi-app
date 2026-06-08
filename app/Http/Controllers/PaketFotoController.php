<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketFoto;

class PaketFotoController extends Controller
{
    public function index()
    {
        $paket = PaketFoto::all();
        return view('paket.index', compact('paket'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        PaketFoto::create([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
        ]);

        return redirect('/paket');
    }
    
    public function edit($id)
    {
    $paket = PaketFoto::where('id_paket', $id)->first();

    return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, $id)
    {
    $paket = PaketFoto::find($id);

    $paket->update([
        'nama_paket' => $request->nama_paket,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'durasi' => $request->durasi,
    ]);

    return redirect('/paket');
    }

    public function destroy($id)
    {
    PaketFoto::destroy($id);

    return redirect('/paket');
    }

}