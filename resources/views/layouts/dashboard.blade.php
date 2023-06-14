@extends('layouts.main')

@section('content')
    <div class="w-full max-w-4xl">
        <h1 class="text-xl max-w-xs mx-auto text-center font-semibold mt-10 md:text-3xl md:max-w-md mb-5 md:mt-0">
            Selamat Datang di
            Dashboard <span class="capitalize">{{ Auth::user()->role->name }}</span>!, <span>{{ Auth::user()->username }}</span></h1>
        <div class="flex flex-wrap justify-center">
            @foreach ($grant as $content)
                <a href="/{{ $content['role'] }}/{{ $content['slug'] }}"
                    class="flex justify-between border p-5 rounded-lg shadow-md hover:bg-indigo-600 basis-5/12 hover:text-white m-2 {{ (Auth::user()->role->name != $content['role']) ? 'hidden' : '' }}">
                    <span>{{ $content['Name'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 ml-3">{!! $content['Icon'] !!}</svg>
                </a>
            @endforeach
        </div>
@endsection
