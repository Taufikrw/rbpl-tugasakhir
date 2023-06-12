@extends('admin.add')

@section('form')
<div class="flex w-full px-5">
    <div class="basis-1/3 h-full">
        <span class="uppercase text-md block text-center mb-5 font-semibold h-fit">Mata Pelajaran yang tersedia</span>
        <ul class="border shadow max-h-96 overflow-y-auto scrollbar-none">
            @foreach ($mapel as $content)
                <button id="{{ $content->matkulName }}" class="py-2 px-4 border-b justify-between hover:bg-indigo-500 hover:text-white duration-200 ease-in block w-full text-left" onclick="setName(this)">{{ $content->matkulName }}</button>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('mata-pelajaran.store') }}" method="POST" class="basis-2/3 relative pl-10 w-full">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-md font-semibold mb-2" for="matkulName">Nama Mata Pelajaran</label>
            <input
                class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('matkulName')
                    is_validate
                @enderror"
                type="text" id="matkulName" name="matkulName" placeholder="Masukkan nama mata pelajaran"
                value="{{ old('matkulName') }}">
            @error('matkulName')
                <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-md font-semibold mb-2" for="className">Kelas</label>
            <select name="idClass" id="className" class="w-full border py-2 px-4 flex items-center rounded">
                @foreach ($kelas as $option)
                <option value="{{ $option->id }}">{{ $option->classLevel }} {{ $option->className }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-md font-semibold mb-2" for="teacherName">Penanggung Jawab</label>
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
        </div>
        <input type="submit" value="Tambah" class="bg-green-500 py-2 px-4 rounded-md text-white uppercase mt-5 right-0 absolute">
    </form>
</div>
@endsection
