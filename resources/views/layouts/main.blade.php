<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Dashboard</title>
</head>

<body>
    <div class="flex">
        @include('partials.sidebar')
        <div class="grow bg-red-500 flex justify-center items-center">
            @yield('content')
        </div>
    </div>

    <script type="text/javascript" src="/assets/js/scripts.js"></script>
</body>

</html>
