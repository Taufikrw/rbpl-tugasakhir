<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>GradeMaster | {{ $title }}</title>
</head>

<body>
    <div class="flex">
        @include('partials.sidebar')
        <div class="flex flex-col grow">
            @include('partials.header')
            <div class="h-full flex justify-center items-center">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/assets/js/scripts.js"></script>
</body>
<script>
    @if (session('message'))
    alert("{{ session('massage') }}"); 
    @endif
</script>
</html>
