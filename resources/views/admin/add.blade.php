@extends('layouts.main')

@section('content')
    <div class="container h-full px-32 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">Tambah {{ $title }}</h1>
        <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
            @yield('form')
        </div>
    </div>
@endsection
