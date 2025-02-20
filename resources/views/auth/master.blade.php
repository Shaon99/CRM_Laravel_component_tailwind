<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Spider-Access</title>
    <link rel="shortcut icon" type="image/png" href="#">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    @yield('content')
</body>

</html>
