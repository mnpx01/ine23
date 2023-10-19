<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta name="description" content="ArbiFut Inc. articles Shop">
    <link rel="shortcut icon" href="ico/logo.ico">
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: 100vw 100vh;
        }

        header {
            background: linear-gradient(to top, LightGreen, white);
        }

        footer {
            background: linear-gradient(to bottom, LightGreen, white);
        }

        a.icon-link {
            color: black;
            font-size: 24px;
            text-decoration: none;
        }

        .card-img-top {
            width: 150px;
            height: 150px;
        }

        #imgcardnav {
            width: 100px;
            height: 100px;
        }

        #cards {
            width: 200px;
            height: auto;
            align-items: center;
            border: none;

        }

        #sidenavlateral {
            background: linear-gradient(to bottom, LightGray 20%, White);
        }

        #cardlateralnav {
            margin-top: 20px;
            background-color: whitesmoke;
            border: none;
        }

        p.card-text {
            line-height: 15px;
            font-weight: 650;
        }
    </style>

    <title>ArbiFut Inc.</title>
</head>

<body>

    <!-- LAYOUT: HEADER -->
    @include('layouts.header')


    <!-- LAYOUT: CENTER -->
    @yield('content-center')
    @yield('content-right')


    <!-- LAYOUT: FOOTER -->
    @include('layouts.footer')

</body>

</html>