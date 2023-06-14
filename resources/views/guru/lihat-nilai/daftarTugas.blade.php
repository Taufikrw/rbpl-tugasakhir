@extends('layouts.main')

@section('content')
    <div class="container px-20 py-11 h-full">
        <h1 class="mb-5 relative right-1/2 translate-x-1/2 text-4xl font-bold top-0 text-center">Daftar Nilai</h1>
        <div class="w-full grid justify-items-center">
            <div class="max-h-[70vh] w-3/5 overflow-y-auto border rounded-lg scrollbar-none">
                <table class="w-full table-auto border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama
                                Tugas</th>
                            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Siswa</th>
                            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Kelas</th>
                            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarTugas as $content)
                            <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                                <td class="py-2 px-4 border-b">{{ $content->taskName }}</td>
                                <td class="py-2 px-4 border-b">{{ $content->siswas->firstName }} {{ $content->siswas->lastName }}</td>
                                <td class="py-2 px-4 border-b">{{ $content->kelas->classLevel }} {{ $content->kelas->className }}</td>
                                <td class="py-2 px-4 border-b">{{ $content->value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
