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
            background:#0f172a;
            overflow-x:hidden;
        }

        .hero{
            min-height:100vh;
            background:
            linear-gradient(rgba(0,0,0,0.7),
            rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1600');

            background-size:cover;
            background-position:center;

            display:flex;
            align-items:center;
        }

        .title{
            font-size:70px;
            font-weight:800;
            color:white;
        }

        .subtitle{
            color:#d1d5db;
            font-size:22px;
            margin-top:20px;
            line-height:1.7;
        }

        .btn-warning{
            background:#facc15;
            border:none;
            color:black;
            font-weight:700;
            padding:15px 35px;
            border-radius:14px;
        }

        .btn-outline-light{
            border-radius:14px;
            padding:15px 35px;
        }

        .navbar{
            background:rgba(0,0,0,0.4);
            backdrop-filter:blur(10px);
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">

    <div class="container">

        <a class="navbar-brand fw-bold fs-3"
           href="/">

            📸 Alfa's Photo

        </a>

        <div class="d-flex gap-3">

            <a href="/login"
               class="btn btn-outline-light">

                Login

            </a>

            <a href="/register"
               class="btn btn-warning">

                Register

            </a>

        </div>

    </div>

</nav>

<section class="hero">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <h1 class="title">

                    Capture Your
                    Best Moment

                </h1>

                <p class="subtitle">

                    Studio fotografi profesional untuk cosplay,
                    graduation, event, dan berbagai momen spesial lainnya
                    dengan hasil premium dan cinematic.

                </p>

                <div class="mt-5 d-flex gap-3">

                    <a href="/register"
                       class="btn btn-warning">

                        Mulai Booking

                    </a>

                    <a href="/login"
                       class="btn btn-outline-light">

                        Login

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

</body>
</html>