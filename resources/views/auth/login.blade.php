@extends('layout.guest')

@section('content')

<div class="container d-flex justify-content-center align-items-center"
     style="min-height:100vh;">

    <div class="auth-card p-5"
         style="width:450px;">

        <div class="text-center mb-4">

            <h1 class="fw-bold">
                Login
            </h1>

            <p class="text-secondary">
                Selamat datang kembali 👋
            </p>

        </div>

        <form method="POST"
              action="{{ route('login') }}">

            @csrf

            <div class="mb-3">

                <label class="fw-semibold">
                    Email
                </label>

                <input type="email"
                       name="email"
                       class="form-control mt-2">

            </div>

            <div class="mb-4">

                <label class="fw-semibold">
                    Password
                </label>

                <input type="password"
                       name="password"
                       class="form-control mt-2">

            </div>

            <button class="btn btn-dark w-100">

                Login

            </button>

        </form>

        <div class="text-center mt-4">

            <small>

                Belum punya akun?

                <a href="/register"
                   class="text-warning fw-bold text-decoration-none">

                    Register

                </a>

            </small>

        </div>

    </div>

</div>

@endsection