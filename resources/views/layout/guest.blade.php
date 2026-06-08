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
            url('https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1600');

            background-size:cover;
            background-position:center;
            min-height:100vh;
        }

        .auth-card{
            background:white;
            border-radius:30px;
            box-shadow:0 20px 50px rgba(0,0,0,0.2);
        }

        .form-control{
            border-radius:14px;
            padding:14px;
        }

        .btn-dark,
        .btn-warning{
            border-radius:14px;
            padding:14px;
            font-weight:600;
        }

    </style>

</head>

<body>

    @yield('content')

</body>

</html>