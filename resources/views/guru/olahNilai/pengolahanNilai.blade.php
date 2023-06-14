@extends('layouts.main')

@section('content')
<div class="grid grid-cols-2 max-w-3xl gap-5 mx-auto w-full">
  @foreach ($fitur as $item)
    <a href="/guru/pengolahanNilai/{{ $item['slug'] }}" class="flex justify-between border p-5 rounded-lg shadow-md hover:bg-indigo-600 basis-1/2 hover:text-white">
      <span class="" >{{ $item['Name'] }}</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-3">{!! $item['icon'] !!}</svg>
    </a>
  @endforeach
</div>
@endsection
