@extends('layouts.main')

@section('content')
    <div class="w-full">
        <h1 class="text-xl max-w-sm mx-auto text-center font-semibold mt-10 md:text-3xl md:max-w-md mb-5 md:mt-0">
            Selamat Datang di
            Dashboard {{ Auth::user()->role->name }}!, <span>{{ Auth::user()->username }}</span></h1>
        <div class="grid grid-cols-2 max-w-3xl gap-5 mx-auto">
            @foreach ($grant as $content)
                <a href="/{{ $content['role'] }}/{{ $content['slug'] }}"
                    class="flex justify-between border p-5 rounded-lg shadow-md hover:bg-indigo-600 basis-1/2 hover:text-white {{ (Auth::user()->role->name != $content['role']) ? 'hidden' : '' }}">
                    <span>{{ $content['Name'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 ml-3">{!! $content['Icon'] !!}</svg>
                </a>
            @endforeach
        </div>
        <a href="/logout" class="p-2 bg-indigo-500 rounded grid w-fit mx-auto mt-10">Logout</a>
    </div>
@endsection
