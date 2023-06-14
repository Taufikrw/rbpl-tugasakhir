@extends('layouts.main')

@section('content')
<div class="container p-2 md:px-20 py-11 h-full">
    <div class="flex mb-5 justify-between relative">
        <h1 class="text-4xl font-bold mx-auto">Daftar {{ $title }}</h1>
    </div>
    <div class="md:max-h-[70vh] overflow-y-auto border rounded-lg scrollbar-none">
        <table class="w-full table-auto border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama</th>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Mata Pelajaran</th>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Kelas</th>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa->nilais as $nilai)
                    <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                        <td class="py-2 px-4 border-b">{{ $nilai->taskName }}</td>
                        <td class="py-2 px-4 border-b">{{ $nilai->mapels->matkulName }}</td>
                        <td class="py-2 px-4 border-b">{{ $nilai->kelas->classLevel }} {{ $nilai->kelas->className }}</td>
                        <td class="py-2 px-4 border-b">{{ $nilai->value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
