<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Devman | Home</title>
    <!-- STYLES -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('fe/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fe/css/dark.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fe/css/style.css') }}" />
</head>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->
            @yield('content')
    <!-- SCRIPTS -->
    
    <script src="{{ asset('fe/js/jquery.js') }}"></script>
    <script src="{{ asset('fe/js/plugins.js') }}"></script>
    <script src="{{ asset('fe/js/init.js') }}"></script>
    <!-- /SCRIPTS -->

</body>

</html>