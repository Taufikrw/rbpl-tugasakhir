@extends('layouts.main')

@section('content')
    <div class="container h-full px-72 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">Tambah {{ $title }}</h1>
        <div class="flex flex-wrap border h-fit rounded-lg shadow-md p-10">
            <form action="{{ route('kelas.store') }}" method="post" class="w-full">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="classLevel">Kelas</label>
                    <input
                    class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('classLevel')
                    is_validate
                    @enderror"
                    type="number" max="12" id="classLevel" name="classLevel" placeholder="Masukkan jenjang kelas"
                    value="{{ old('classLevel') }}">
                    @error('classLevel')
                    <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="className">Nama Kelas</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('className')
                    is_validate
                @enderror"
                        type="text" id="className" name="className" placeholder="Masukkan nama kelas"
                        value="{{ old('className') }}">
                    @error('className')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="classYear">Tahun Kelas</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('classYear')
                    is_validate
                @enderror"
                        type="number" min="2000" max="2099" id="classYear" name="classYear" placeholder="Masukkan tahun kelas"
                        value="{{ old('classYear') }}">
                    @error('classYear')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" value="Tambah"
                class="bg-green-500 py-2 px-4 rounded-md text-white uppercase mt-5">
        </form>
            </form>
        </div>
    </div>
@endsection
