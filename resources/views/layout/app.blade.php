<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Alfa's Photo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            margin:0;
            font-family:'Segoe UI', sans-serif;

            background:
            linear-gradient(rgba(0,0,0,0.7),
            rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600');

            background-size:cover;
            background-position:center;
            background-attachment:fixed;

            min-height:100vh;
        }

        .navbar{
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .navbar-brand{
            font-weight:700;
            font-size:24px;
            color:white !important;
            letter-spacing:1px;
        }

        .nav-link{
            color:white !important;
            font-weight:500;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#facc15 !important;
        }

        .btn-warning{
            background:#facc15;
            border:none;
            color:black;
            font-weight:600;
        }

        .btn-warning:hover{
            background:#eab308;
        }

        .card{
            background:rgba(255,255,255,0.08);
            backdrop-filter:blur(15px);
            border:1px solid rgba(255,255,255,0.1);

            color:white;

            border-radius:24px;
            overflow:hidden;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 15px 35px rgba(0,0,0,0.1);
        }

        .table{
            border-radius:20px;
            overflow:hidden;
        }

        .form-control,
        .form-select{
            border-radius:14px;
            padding:14px;
        }

        .btn{
            border-radius:14px;
        }

        main{
            color:white;
        }

        .table{
            color:white;
        }

        .table th{
            background:rgba(255,255,255,0.1);
        }

        .form-control,
        .form-select{
            background:rgba(255,255,255,0.1);
            border:1px solid rgba(255,255,255,0.15);
            color:white;
        }

        .form-control:focus,
        .form-select:focus{
            background:rgba(255,255,255,0.15);
            color:white;
            border-color:#facc15;
            box-shadow:none;
        }

        .form-control::placeholder{
            color:#ddd;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark py-3">

    <div class="container">

        <a class="navbar-brand"
           href="/dashboard">

            📸 Alfa's Photo

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-center gap-2">

                <li class="nav-item">

                    <a class="nav-link"
                       href="/dashboard">

                        Dashboard

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="/paket">

                        Paket

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                       href="/booking">

                        Booking

                    </a>

                </li>

                <li class="nav-item">

                    <form action="/logout"
                          method="POST">

                        @csrf

                        <button class="btn btn-warning px-4">

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</nav>

<main>

    @yield('content')

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>