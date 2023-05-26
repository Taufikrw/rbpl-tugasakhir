@extends('admin.list')

@section('table')
    <thead>
        <tr>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">NISN</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Jenis Kelamin</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tempat Lahir</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $person)
            <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                <td class="py-2 px-4 border-b">{{ $person->firstName }} {{ $person->lastName }}</td>
                <td class="py-2 px-4 border-b">{{ $person->nisn }}</td>
                <td class="py-2 px-4 border-b">{{ $person->gender }}</td>
                <td class="py-2 px-4 border-b">{{ $person->tempatLahir }}</td>
                <td class="py-2 px-4 border-b">{{ $person->tanggalLahir }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection
