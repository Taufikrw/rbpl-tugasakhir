<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>GradeMaster | {{ $title }}</title>
</head>

<body class="bg-gray-100">
    @yield('form')

    <script type="text/javascript" src="/assets/js/scripts.js"></script>
</body>

</html>
