@extends('layout.guest')

@section('content')

<div class="container d-flex justify-content-center align-items-center"
     style="min-height:100vh;">

    <div class="auth-card p-5"
         style="width:500px;">

        <div class="text-center mb-4">

            <h1 class="fw-bold">
                Verifikasi Email
            </h1>

            <p class="text-secondary">
                Kami telah mengirim link verifikasi ke email kamu.
                Silakan cek inbox atau folder spam.
            </p>

        </div>

        @if (session('status') == 'verification-link-sent')

            <div class="alert alert-success">

                Link verifikasi baru berhasil dikirim.

            </div>

        @endif

        <form method="POST"
              action="{{ route('verification.send') }}">

            @csrf

            <button type="submit"
                    class="btn btn-warning w-100">

                Kirim Ulang Email Verifikasi

            </button>

        </form>

        <form method="POST"
              action="{{ route('logout') }}"
              class="mt-3">

            @csrf

            <button type="submit"
                    class="btn btn-secondary w-100">

                Logout

            </button>

        </form>

    </div>

</div>

@endsection