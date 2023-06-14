@extends('layouts.main')

@section('content')
    <div class="container h-full px-32 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">Membuat {{ $title }}</h1>
        <div class="border h-[70vh] rounded-lg shadow-md p-10">
            <form action="{{ route('soal.store') }}" method="POST" enctype="multipart/form-data" class="flex px-10">
                @csrf
                <div class="w-full px-10">
                    <div class="h-96 max-h-96  overflow-auto scrollbar-none">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="kuisName">Nama Kuis</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('kuisName')
                            is_validate
                        @enderror"
                                type="text" id="kuisName" name="kuisName" placeholder="Masukkan nama kuis"
                                value="{{ old('kuisName') }}">
                            @error('kuisName')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="processingTime">Waktu Pengerjaan</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('processingTime')
                            is_validate
                        @enderror"
                                type="datetime-local" id="processingTime" name="processingTime" placeholder="Masukkan nama depan"
                                value="{{ old('processingTime') }}">
                            @error('processingTime')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="duration">Batas Akhir Pengerjaan</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('duration')
                            is_validate
                        @enderror"
                                type="datetime-local" id="duration" name="duration" placeholder="Masukkan nama depan"
                                value="{{ old('duration') }}">
                            @error('duration')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="jumlahPilihanGanda">Jumlah Soal Pilihan Ganda</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('jumlahPilihanGanda')
                            is_validate
                        @enderror"
                                type="number" id="jumlahPilihanGanda" name="jumlahPilihanGanda" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('jumlahPilihanGanda') }}">
                            @error('jumlahPilihanGanda')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="poinPilihanGanda">Poin Untuk Semua Soal Pilihan Ganda Benar</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('poinPilihanGanda')
                            is_validate
                        @enderror"
                                type="number" id="poinPilihanGanda" name="poinPilihanGanda" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('poinPilihanGanda') }}">
                            @error('poinPilihanGanda')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="jumlahIsianSingkat">Jumlah Soal Isian Singkat</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('jumlahIsianSingkat')
                            is_validate
                        @enderror"
                                type="number" id="jumlahIsianSingkat" name="jumlahIsianSingkat" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('jumlahIsianSingkat') }}">
                            @error('jumlahIsianSingkat')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="poinIsianSingkat">Poin Untuk Semua Soal Isian Singkat Benar</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('poinIsianSingkat')
                            is_validate
                        @enderror"
                                type="number" id="poinIsianSingkat" name="poinIsianSingkat" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('poinIsianSingkat') }}">
                            @error('poinIsianSingkat')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="jumlahEssay">Jumlah Soal Essay</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('jumlahEssay')
                            is_validate
                        @enderror"
                                type="number" id="jumlahEssay" name="jumlahEssay" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('jumlahEssay') }}">
                            @error('jumlahEssay')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-md font-semibold mb-2" for="poinEssay">Poin Untuk Semua Soal Essay Benar</label>
                            <input
                                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('poinEssay')
                            is_validate
                        @enderror"
                                type="number" id="poinEssay" name="poinEssay" placeholder="Masukan 0 jika tidak ada"
                                value="{{ old('poinEssay') }}">
                            @error('poinEssay')
                                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="hidden">
                            <input type="text" name="idClass" id="idClass" value="{{ $mapel->idClass }}">
                            <input type="text" name="idMapel" id="idMapel" value="{{ $mapel->id }}">
                        </div>
                    </div>
                    <input type="submit" value="Tambah"
                        class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">
                </div>
            </form>
        </div>
    </div>
@endsection