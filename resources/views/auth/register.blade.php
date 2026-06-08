@extends('layout.guest')

@section('content')

<div class="container d-flex justify-content-center align-items-center"
     style="min-height:100vh;">

    <div class="auth-card p-5"
         style="width:500px;">

        <div class="text-center mb-4">

            <h1 class="fw-bold">
                Register
            </h1>

            <p class="text-secondary">
                Buat akun untuk mulai booking 📸
            </p>

        </div>

        <form method="POST"
              action="{{ route('register') }}">

            @csrf

            <div class="mb-3">

                <label class="fw-semibold">
                    Nama
                </label>

                <input type="text"
                       name="name"
                       class="form-control mt-2">

            </div>

            <div class="mb-3">

            <label class="fw-semibold">
                Email
            </label>

            <input type="text"
                id="email"
                name="email"
                class="form-control mt-2"
                onkeyup="cekRealtime()">

            <small id="hasil"></small>

            </div>

            <div class="mb-3">

                <label class="fw-semibold">
                    Password
                </label>

                <input type="password"
                       name="password"
                       class="form-control mt-2">

            </div>

            <div class="mb-4">

                <label class="fw-semibold">
                    Konfirmasi Password
                </label>

                <input type="password"
                       name="password_confirmation"
                       class="form-control mt-2">

            </div>

            <button class="btn btn-warning w-100">

                Register

            </button>

        </form>

        <div class="text-center mt-4">

            <small>

                Sudah punya akun?

                <a href="/login"
                   class="text-warning fw-bold text-decoration-none">

                    Login

                </a>

            </small>

        </div>

    </div>

</div>

<script>

function cekRealtime() {

    const email =
        document.getElementById("email").value;

    const hasil =
        document.getElementById("hasil");

    const regex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(email == "") {

        hasil.innerHTML = "";

        return;
    }

    if(regex.test(email)) {

        hasil.innerHTML =
            "✓ Email valid";

        hasil.style.color =
            "green";

    } else {

        hasil.innerHTML =
            "✗ Format email salah";

        hasil.style.color =
            "red";

    }

}

</script>

@endsection