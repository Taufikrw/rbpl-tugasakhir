@extends('layouts.main')
@section('content')
<div class="container h-full px-32 py-12">
    <h1 class="flex justify-center text-4xl font-bold mb-5">Tambah {{ $title }}</h1>
    <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
        <form action="" method="POST" enctype="multipart/form-data" class="flex">
            @csrf
            <div class="w-full border border-black">
                <div class="overflow-auto scrollbar-none">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="taskName">Masukan nama tugas!</label>
                        <input
                            class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('taskName')
                        is_validate
                    @enderror"
                            type="text" id="taskName" name="taskName" placeholder="Example : Kuis 1 IPA"
                            value="{{ old('taskName') }}">
                        @error('taskName')
                            <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>    
            </div>
            <input class="hidden" type="submit" value="Tambah"
                    class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">
        </form>
    </div>
</div>
@endsection
