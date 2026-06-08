@extends('layout.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow-lg rounded-4 p-5">

        <h1 class="fw-bold mb-4 text-center">
            Booking Paket
        </h1>

        <form action="/booking" method="POST">

            @csrf

            <div class="mb-4">

                <label class="fw-semibold mb-2">

                    Pilih Paket

                </label>

                <select name="paket"
                        class="form-select form-select-lg"
                        required>

                    <option value="">
                        -- Pilih Paket --
                    </option>

                    @foreach($paket as $p)

                        <option value="{{ $p->id_paket }}">

                            {{ $p->nama_paket }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="fw-semibold mb-2">

                    Tanggal Booking

                </label>

                <input type="date"
                       name="tanggal"
                       class="form-control form-control-lg"
                       required>

            </div>

            <div class="mb-4">

                <label class="fw-semibold mb-2">

                Lokasi Pemotretan

                </label>

                <input type="text"
                       name="lokasi"
                       class="form-control form-control-lg"
                       placeholder="Contoh: Delipark Mall Medan"
                       required>

            </div>

            <button type="submit"
                    class="btn btn-warning btn-lg w-100 fw-bold">

                Booking Sekarang

            </button>

        </form>

    </div>

</div>

@endsection