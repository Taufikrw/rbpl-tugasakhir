@extends('layouts.main')
@section('content')
<div class="container h-full px-32 py-12">
    <h1 class="flex justify-center text-4xl font-bold mb-5">Tambah {{ $title }}</h1>
    <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
        <form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data" class="h-full w-full grid justify-items-center">
            @csrf
            <div class="w-3/5 h-min">
                <div class="overflow-auto scrollbar-none">
                    <div class="mb-4">
                        <div class="flex items-center inputNilai1 h-[50vh]">
                            <div class="w-full grid justify-items-center">
                                <label class="text-center block text-gray-700 text-md font-semibold mb-2 text-xl w-max" for="taskName">Masukan nama tugas!</label>
                                <input
                                    id="inputTaskName" class="border border-gray-500 outline-indigo-500 rounded-lg px-4 py-2 w-full"
                                    type="text" id="taskName" name="taskName" placeholder="Example : Kuis 1 IPA"
                                    value="">
                            </div>
                        </div>
                        <div class="border border-green-500 inputNilai2 hidden h-[50vh] overflow-y-auto border rounded-lg scrollbar-none">
                            <table class="w-full table-auto">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">No</th>
                                        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama</th>
                                        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nilai</th>
                                    </tr>
                                </thead>
                                <input type="text" class="hidden" id="idMapel" name="idMapel" value="{{ $mapel->id }}">
                                <input type="text" class="hidden" id="idKelas" name="idKelas" value="{{ $mapel->idClass }}">
                                <div>
                                    <?php
                                        $index = 0;
                                    ?>
                                @foreach ($siswas as $siswa)
                                    <tr class="hover:bg-indigo-500 duration-200 ease-in">
                                        <td class="py-2 px-4 border-b">
                                            <label for="valueSiswa[{{ $index }}]">
                                                {{ $index+1 }}
                                            </label>
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <label for="valueSiswa[{{ $index }}]">
                                                {{ $siswa->firstName }} {{ $siswa->lastName }}
                                            </label>
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <input
                                            class=""
                                            type="text" id="valueSiswa[{{ $index }}]" name="valueSiswa[{{ $index }}]" placeholder="Masukan nilai"
                                            value="">
                                        </td>
                                    </tr>
                                    <div class="hidden">
                                        <input type="text" id="idSiswa[{{ $index }}]" name="idSiswa[{{ $index }}]" value="{{ $siswa->id }}">
                                    </div>
                                    <?php
                                        $index++;
                                    ?>
                                @endforeach
                                </div>
                            </table>
                        </div>
                        <input type="text" class="hidden" id="jumlahSiswa" name="jumlahSiswa" value="{{ $index }}">
                    </div>
                </div>    
            </div>
            <button type="button" disabled class="inputNilai1 bg-blue-500 py-1 rounded-2xl w-20 disabled:bg-blue-300 disabled:text-slate-500 rounded-full" id="nextTaskName">Next</button>
            <div class="flex hidden inputNilai2 gap-2">
                <button type="button" class="bg-blue-500 py-1 rounded-2xl w-20" id="backTaskName">Back</button>
                <input class="bg-green-500 py-1 rounded-2xl w-20" type="submit" value="Tambah"
                    class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">
            </div>
        </form>
    </div>
</div>
@endsection
