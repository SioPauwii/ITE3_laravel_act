<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing Activity</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
    <ul id="nav">
        <li>
            <a href="{{ route('homepage') }}"
               @class(['active' => ($active ?? '') === 'home'])>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
               @class(['active' => ($active ?? '') === 'contact'])>
                Contact
            </a>
        </li>
        <li>
            <a href="{{ route('about') }}"
               @class(['active' => ($active ?? '') === 'about'])>
                About
            </a>
        </li>
    </ul>

    @yield('content')
</body>
</html>
