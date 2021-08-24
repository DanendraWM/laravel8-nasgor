<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

    <title>@yield('judul')</title>
</head>

<body>
    <div class="nav">
        <ul>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
    <div class="bg">
        <div class="canvas">
            <div class="text">
                @yield('isi')
            </div>
        </div>

    </div>

</body>

</html>
