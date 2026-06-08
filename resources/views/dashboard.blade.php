@extends('layout.app')

@section('content')

<div class="container py-5">

    {{-- HERO SECTION --}}
    <div class="row align-items-center mb-5">

        <div class="col-md-6">

            <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                Studio Fotografi Profesional
            </span>

            <h1 class="fw-bold display-3 mb-4">

                Capture Your
                Best Moment 📸

            </h1>

            <p class="text-secondary fs-5">

                Studio fotografi modern untuk cosplay event,
                graduation, prewedding, dan berbagai momen
                spesial lainnya dengan hasil premium
                dan cinematic.

            </p>

            <div class="mt-4 d-flex gap-3">

                <a href="/booking/create"
                   class="btn btn-warning btn-lg px-4 shadow">

                    Booking Sekarang

                </a>

                <a href="/paket"
                   class="btn btn-dark btn-lg px-4">

                    Lihat Paket

                </a>

            </div>

        </div>

        <div class="col-md-6">

            <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1200"
                 class="img-fluid rounded-4 shadow-lg"
                 style="height:500px;
                        width:100%;
                        object-fit:cover;
                        object-position:center;">

        </div>

    </div>

    {{-- STATISTIK --}}
    <div class="row g-4 mb-5">

        <div class="col-md-4">

            <div class="card bg-dark text-white p-4 shadow-lg h-100">

                <h5>Total Paket</h5>

                <h1 class="fw-bold display-4 mt-3">

                    {{ \App\Models\PaketFoto::count() }}

                </h1>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card bg-grey text-white p-4 shadow-lg h-100">

                <h5>Total Booking</h5>

                <h1 class="fw-bold display-4 mt-3">

                    {{ \App\Models\Booking::count() }}

                </h1>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card bg-warning p-4 shadow-lg h-100">

                <h5>Member Aktif</h5>

                <h1 class="fw-bold display-4 mt-3">

                    {{ \App\Models\User::count() }}

                </h1>

            </div>

        </div>

    </div>

    {{-- WHY CHOOSE US --}}
    <div class="bg-white rounded-4 shadow-lg p-5 mb-5">

        <div class="text-center mb-5">

            <h1 class="fw-bold">
                Why Choose Us?
            </h1>

            <p class="text-secondary">
                Alasan kenapa banyak client memilih studio kami ✨
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="text-center">

                    <div class="fs-1 mb-3">
                        📷
                    </div>

                    <h4 class="fw-bold">
                        Professional Camera
                    </h4>

                    <p class="text-secondary mt-3">

                        Menggunakan equipment modern
                        untuk hasil foto premium.

                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="text-center">

                    <div class="fs-1 mb-3">
                        ✨
                    </div>

                    <h4 class="fw-bold">
                        Cinematic Editing
                    </h4>

                    <p class="text-secondary mt-3">

                        Proses editing profesional
                        dengan tone modern dan aesthetic.

                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="text-center">

                    <div class="fs-1 mb-3">
                        ❤️
                    </div>

                    <h4 class="fw-bold">
                        Trusted Service
                    </h4>

                    <p class="text-secondary mt-3">

                        Sudah dipercaya berbagai client
                        untuk event spesial mereka.

                    </p>

                </div>

            </div>

        </div>

    </div>

    {{-- PAKET --}}
    <div class="mb-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h1 class="fw-bold">
                    Paket Unggulan
                </h1>

                <p class="text-secondary">
                    Paket favorit client kami 🔥
                </p>

            </div>

            <a href="/paket"
               class="btn btn-outline-dark">

                Semua Paket

            </a>

        </div>

        <div class="row g-4">

            {{-- COSPLAY --}}
            <div class="col-md-6">

                <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                    <img src="{{ asset('image/cosplay.jpeg') }}"
                         class="card-img-top"
                         style="height:600px;
                         object-fit:cover;
                         object-position:center;">

                    <div class="card-body p-4">

                        <h3 class="fw-bold">
                            Cosplay Event
                        </h3>

                        <p class="text-secondary mt-3">

                            Foto event cosplay dengan
                            konsep cinematic modern
                            dan hasil premium.

                        </p>

                        <a href="/booking/create"
                           class="btn btn-warning mt-3">

                            Booking Sekarang

                        </a>

                    </div>

                </div>

            </div>

            {{-- GRADUATION --}}
            <div class="col-md-6">

                <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                    <img src="{{ asset('image/graduation.jpg') }}"
                         class="card-img-top"
                         style="height:600px;
                                object-fit:cover;
                                object-position:center;">

                    <div class="card-body p-4">

                        <h3 class="fw-bold">
                            Graduation
                        </h3>

                        <p class="text-secondary mt-3">

                            Abadikan momen kelulusan
                            terbaikmu dengan kualitas
                            fotografi profesional.

                        </p>

                        <a href="/booking/create"
                           class="btn btn-warning mt-3">

                            Booking Sekarang

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection