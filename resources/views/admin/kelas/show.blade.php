@extends('layouts.main')

@section('content')
    <div class="container h-full px-72 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">{{ $kelas->classLevel }} {{ $kelas->className }}</h1>
        <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
            <div class="basis-2/3 h-full">
                <span class="uppercase text-md block text-center mb-5 font-semibold h-fit">Daftar Siswa
                    {{ $kelas->classLevel }} {{ $kelas->className }}</span>
                <ul class="border shadow max-h-96 overflow-y-auto scrollbar-none">
                    @foreach ($list as $content)
                        <a href="{{ route('siswa.show', $content->id) }}"
                            class="py-2 px-4 border-b justify-between hover:bg-indigo-500 hover:text-white duration-200 ease-in block w-full text-left">
                            {{ $content->firstName }} {{ $content->lastName }}</a>
                    @endforeach
                </ul>
            </div>
            <div class="basis-1/3 relative pl-10 w-full">
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2">Jenjang Kelas</span>
                    <span class="text-xl mb-5 font-semibold">{{ $kelas->classLevel }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2">Nama Kelas</span>
                    <span class="text-xl mb-5 font-semibold">{{ $kelas->className }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2">Tahun Kelas</span>
                    <span class="text-xl mb-5 font-semibold">{{ $kelas->classYear }}</span>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700 text-md mb-2">Jumlah Siswa</span>
                    <span class="text-xl mb-5 font-semibold">{{ $list->count() }}</span>
                </div>
                <div class="mb-4 mt-5 flex">
                    <form action="{{ route('kelas.destroy', $kelas->id) }}" method="POST" class="block">
                        @method('delete')
                        @csrf
                        <button class="bg-red-500 py-2 px-4 rounded-md text-white uppercase"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                    <a href="{{ route('kelas.edit', $kelas->id) }}"
                        class="bg-indigo-500 py-2 px-4 rounded-md text-white uppercase ml-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
