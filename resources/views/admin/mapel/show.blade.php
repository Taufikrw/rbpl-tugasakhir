@extends('layouts.main')

@section('content')
    <div class="container h-full px-72 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">{{ $mapel->matkulName }}</h1>
        <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
            <div class="basis-1/2 h-full">
                <span class="uppercase text-md block text-center mb-5 font-semibold h-fit">Mata Pelajaran yang
                    tersedia</span>
                <ul class="border shadow max-h-96 overflow-y-auto scrollbar-none">
                    @foreach ($list as $content)
                        <li
                            class="py-2 px-4 border-b justify-between hover:bg-indigo-500 hover:text-white duration-200 ease-in block w-full text-left">
                            {{ $content->matkulName }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="basis-1/2 relative pl-10 w-full">
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2" for="matkulName">Nama Mata Pelajaran</span>
                    <span class="text-xl mb-5 font-semibold">{{ $mapel->matkulName }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2" for="matkulName">Kelas</span>
                    <span class="text-xl mb-5 font-semibold">{{ $mapel->kelas->classLevel }}
                        {{ $mapel->kelas->className }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2" for="matkulName">Tahun Ajaran</span>
                    <span class="text-xl mb-5 font-semibold">{{ $mapel->tahunAjaran }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2" for="matkulName">Penanggung Jawab</span>
                    <span class="text-xl mb-5 font-semibold">{{ $mapel->gurus->firstName }}
                        {{ $mapel->gurus->lastName }}</span>
                </div>
                <div class="mb-4 mt-5 flex">
                    <form action="{{ route('mata-pelajaran.destroy', $mapel->id) }}" method="POST" class="block">
                        @method('delete')
                        @csrf
                        <button class="bg-red-500 py-2 px-4 rounded-md text-white uppercase" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                    <a href="{{ route('mata-pelajaran.edit', $mapel->id) }}"
                        class="bg-indigo-500 py-2 px-4 rounded-md text-white uppercase ml-2">Edit</a>
                </div>
                {{-- <div class="mb-4">
            <label class="block text-gray-700 text-md font-semibold mb-2" for="className">Kelas</label>
                <select name="idClass" id="className" class="w-full border py-2 px-4 flex items-center rounded">
                    @foreach ($kelas as $option)
                    <option value="{{ $option->id }}">{{ $option->classLevel }} {{ $option->className }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-md font-semibold mb-2" for="teacherName">Kelas</label>
                <select name="idGuru" id="teacherName" class="w-full border py-2 px-4 flex items-center rounded">
                    @foreach ($guru as $option)
                    <option value="{{ $option->id }}">{{ $option->firstName }} {{ $option->lastName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-md font-semibold mb-2" for="tahunAjaran">Tahun Ajaran</label>
                <input
                    class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('tahunAjaran')
                        is_validate
                    @enderror"
                    type="number" min="2000" max="2099" id="tahunAjaran" name="tahunAjaran" placeholder="Masukkan tahun ajaran"
                    value="{{ old('tahunAjaran') }}">
                    @error('tahunAjaran')
                    <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div> --}}
            </div>
            {{-- <form action="{{ route('mata-pelajaran.store') }}" method="POST" class="basis-2/3 relative pl-10 w-full">
            @csrf
        </form> --}}
        </div>
    </div>
@endsection
