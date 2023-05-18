@extends('layouts.main')

@section('content')
    @include('partials.sidebar')
    <div class="flex flex-col grow">
        @include('partials.header')
        <div class="h-full flex justify-center items-center">
            <div class="w-full">
                <h1 class="text-xl max-w-sm mx-auto text-center font-semibold mt-10 md:text-3xl md:max-w-md mb-5 md:mt-0">Selamat Datang di
                    Dashboard Admin!, <span>Nama User</span></h1>
                <div class="flex flex-wrap justify-center gap-5">
                    @foreach ($grant as $content)
                        <div class="border p-5 rounded-lg shadow-md hover:bg-indigo-600 basis-1/2 hover:text-white">
                            <span>{{ $content['Name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
