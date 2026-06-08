@extends('layout.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-5">

        <div>

            <h1 class="fw-bold display-4">
                Booking Saya
            </h1>

            <p class="text-secondary fs-5">
                Kelola semua booking fotografimu 📸
            </p>

        </div>

        @if(auth()->user()->role != 'admin')

            <a href="/booking/create"
               class="btn btn-warning px-4 py-3 rounded-4 fw-bold shadow">

                + Booking Baru

            </a>

        @endif

    </div>

    @if(session('success'))

        <div class="alert alert-success rounded-4 shadow-sm">

            {{ session('success') }}

        </div>

    @endif

    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead class="bg-dark text-white">

                    <tr>

                        <th class="p-4">No</th>

                        <th class="p-4">Nama</th>

                        <th class="p-4">Paket</th>

                        <th class="p-4">Tanggal</th>

                        <th class="p-4">Lokasi</th>

                        <th class="p-4">Status</th>

                        <th class="p-4 text-center">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($booking as $b)

                        <tr>

                            <td class="p-4 fw-semibold">

                                {{ $loop->iteration }}

                            </td>

                            <td class="p-4">

                                {{ $b->user->name }}

                            </td>

                            <td class="p-4 fw-semibold">

                                {{ $b->paket->nama_paket }}

                            </td>

                            <td class="p-4">

                                {{ $b->tanggal_booking }}

                            </td>

                            <td class="p-4">

                                {{ $b->lokasi }}

                            </td>

                            {{-- STATUS --}}
                            <td class="p-4">

                                @if($b->status == 'Pending')

                                    <span class="badge bg-warning text-dark px-4 py-2 rounded-pill">

                                        Pending

                                    </span>

                                @elseif($b->status == 'Diterima')

                                    <span class="badge bg-success px-4 py-2 rounded-pill">

                                        Diterima

                                    </span>

                                @elseif($b->status == 'Ditolak')

                                    <span class="badge bg-danger px-4 py-2 rounded-pill">

                                        Ditolak

                                    </span>

                                @else

                                    <span class="badge bg-secondary px-4 py-2 rounded-pill">

                                        {{ $b->status }}

                                    </span>

                                @endif

                            </td>

                            {{-- AKSI --}}
                            <td class="p-4 text-center">

                                {{-- ADMIN --}}
                                @if(auth()->user()->role == 'admin')

                                    <div class="d-flex gap-2 justify-content-center">

                                        {{-- TERIMA --}}
                                        <form action="{{ route('booking.status', $b->id_booking) }}"
                                              method="POST">

                                            @csrf
                                            @method('PUT')

                                            <input type="hidden"
                                                   name="status"
                                                   value="Diterima">

                                            <button type="submit"
                                                    class="btn btn-success rounded-pill px-4">

                                                Terima

                                            </button>

                                        </form>

                                        {{-- TOLAK --}}
                                        <form action="{{ route('booking.status', $b->id_booking) }}"
                                              method="POST">

                                            @csrf
                                            @method('PUT')

                                            <input type="hidden"
                                                   name="status"
                                                   value="Ditolak">

                                            <button type="submit"
                                                    class="btn btn-danger rounded-pill px-4">

                                                Tolak

                                            </button>

                                        </form>

                                    </div>

                                @else

                                    {{-- USER --}}
                                    <form action="/booking/{{ $b->id_booking }}"
                                          method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger rounded-pill px-4">

                                            Cancel

                                        </button>

                                    </form>

                                @endif

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center p-5 text-secondary">

                                Belum ada booking 😢

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection