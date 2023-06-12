@extends('admin.list')

@section('table')
    <thead>
        <tr>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Mata Pelajaran</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tahun Ajaran</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Penangungjawab</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Kelas</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mapel as $content)
            <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                <td class="py-2 px-4 border-b">{{ $content->matkulName }}</td>
                <td class="py-2 px-4 border-b">{{ $content->tahunAjaran }}</td>
                <td class="py-2 px-4 border-b">{{ $content->gurus->firstName }} {{ $content->gurus->lastName }}</td>
                <td class="py-2 px-4 border-b">{{ $content->kelas->classLevel }} {{ $content->kelas->className }}</td>
                <td class="py-2 px-4 border-b"><a href="{{ route('mata-pelajaran.show', $content->id) }}">
                        <x-heroicon-o-arrow-top-right-on-square class="w-6 mx-auto" />
                    </a></td>
            </tr>
        @endforeach
    </tbody>
@endsection
