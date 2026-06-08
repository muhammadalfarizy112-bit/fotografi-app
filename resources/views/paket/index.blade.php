@extends('layout.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-5">

        <div>

            <h1 class="fw-bold display-5">
                Paket Foto
            </h1>

            <p class="text-secondary">
                Pilih paket fotografi terbaik untuk momen spesialmu ✨
            </p>

        </div>

        @if(auth()->user()->role == 'admin')

            <a href="{{ route('paket.create') }}"
               class="btn btn-warning px-4 py-2 shadow rounded-pill">

                + Tambah Paket

            </a>

        @endif

    </div>

    <div class="row">

        @foreach($paket as $item)

        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                {{-- GAMBAR --}}
                @if($item->nama_paket == 'Cosplay Event')

                    <img src="{{ asset('image/cosplay.jpeg') }}"
                         class="card-img-top"
                         style="height:600px; object-fit:cover; object-position:center;">

                @else($item->nama_paket == 'Graduation')

                    <img src="{{ asset('image/graduation.jpg') }}"
                         class="card-img-top"
                         style="height:600px; object-fit:cover; object-position:center;">

                @endif

                <div class="card-body p-4 d-flex flex-column">

                    <h3 class="fw-bold">
                        {{ $item->nama_paket }}
                    </h3>

                    <p class="text-secondary mt-3">

                        {{ $item->deskripsi }}

                    </p>

                    <div class="mt-auto">

                        <h2 class="fw-bold text-warning mt-4">

                            Rp {{ number_format($item->harga,0,',','.') }}

                        </h2>

                        <p class="text-muted">

                            Durasi: {{ $item->durasi }}

                        </p>

                        <div class="mt-4 d-flex gap-2 flex-wrap">

                            {{-- USER --}}
                            @if(auth()->user()->role != 'admin')

                                <a href="/booking/create"
                                   class="btn btn-warning px-4 rounded-pill">

                                    Booking

                                </a>

                            @endif

                            {{-- ADMIN --}}
                            @if(auth()->user()->role == 'admin')

                                <a href="{{ route('paket.edit', $item->id_paket) }}"
                                   class="btn btn-dark rounded-pill px-4">

                                    Edit

                                </a>

                                <form action="{{ route('paket.destroy', $item->id_paket) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger rounded-pill px-4">

                                        Hapus

                                    </button>

                                </form>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection