@extends('admin.list')

@section('table')
<thead>
    <tr>
        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Level Kelas</th>
        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama Kelas</th>
        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tahun Ajaran</th>
        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Jumlah Siswa</th>
        <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($kelas as $content)
        <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
            <td class="py-2 px-4 border-b">{{ $content->classLevel }}</td>
            <td class="py-2 px-4 border-b">{{ $content->className }}</td>
            <td class="py-2 px-4 border-b">{{ $content->classYear }}</td>
            <td class="py-2 px-4 border-b">{{ $content->siswas->count() }}</td>
            <td class="py-2 px-4 border-b"><a href="{{ route('kelas.show', $content->id) }}">
                    <x-heroicon-o-arrow-top-right-on-square class="w-6 mx-auto" />
                </a></td>
        </tr>
    @endforeach
</tbody>
@endsection