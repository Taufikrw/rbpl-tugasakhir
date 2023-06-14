@extends('layouts.main')

@section('content')
    <div class="container px-20 py-11 h-full">
        <div class="flex mb-5 justify-end relative">
            <a href="/admin/{{ $slug }}/create" class="py-2 px-2 rounded-md shadow-md border-2 border-black flex hover:border-transparent hover:bg-green-500 hover:text-white">
                <x-heroicon-o-plus-circle class="w-6" />
                <span class="self-center mx-2 uppercase">Tambah</span>
            </a>
            <h1 class="absolute right-1/2 translate-x-1/2 text-4xl font-bold -top-2">Daftar {{ $title }}</h1>
        </div>
        <div class="max-h-[70vh] overflow-y-auto border rounded-lg scrollbar-none">
            <table class="w-full table-auto border border-gray-300">
                @yield('table')
            </table>
        </div>
    </div>
    <script>
        @if (session('success'))
            alert("{{ session('success') }}");
        @endif
    </script>
@endsection
