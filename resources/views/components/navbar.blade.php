<head>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
    <ul id="nav">
        <li><a href="{{ route('homepage') }}" class="{{ (isset($active) && $active == 'home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('contact') }}" class="{{ (isset($active) && $active == 'contact') ? 'active' : '' }}">Contact</a></li>
        <li><a href="{{ route('about') }}" class="{{ (isset($active) && $active == 'about') ? 'active' : '' }}">About</a></li>
    </ul>
</body>