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
        <li> <a href="http://127.0.0.1:8000/">Home</a></li>
        <li> <a href="http://127.0.0.1:8000/contact">Contact</a></li>
        <li><a href="http://127.0.0.1:8000/about">About</a></li>
    </ul>
    <h1>Welcome!</h1>
    <h3>Hello, {{ $name }}! And welcome to Laravel!</h3>
    <p><b>Note*</b> Feel free to change the name after the 'welcome/' in the URL to see different greetings.</p>
</body>
</html>