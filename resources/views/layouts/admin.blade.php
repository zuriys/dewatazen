<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dewata Zen</title>
    <!--START FAVICON-->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
    <!--END FAVICON-->
    <!-- FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @yield("css")
</head>
<body>
    @include('headeradmin')

    @include('sidebaradmin')

    @yield('content')

    @yield('js')
</body>
</html>