@include('components.navbar', ['active' => $active ?? 'home'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing Activity</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
    <h1>Welcome to the Homepage</h1>
    <h3>Hello, {{ $name }}!</h3>
    <h3>Welcome to Laravel!</h3>
    <p><b>Note*</b> Feel free to change the name after the URL by adding '/your_name' to see different greetings.</p>
</body>
</html>