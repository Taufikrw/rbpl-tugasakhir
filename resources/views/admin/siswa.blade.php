@extends('layouts.main')

@section('content')
    <table class="table-auto border border-collapse">
        <thead>
            <tr>
                <th class="border">Nama</th>
                <th class="border">NISN</th>
                <th class="border">Jenis Kelamin</th>
                <th class="border">Tempat Lahir</th>
                <th class="border">Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $person)
                <tr>
                    <td class="border">{{ $person->nisn }}</td>
                    <td class="border">{{ $person->firstName }} {{ $person->LastName }}</td>
                    <td class="border">{{ $person->gender }}</td>
                    <td class="border">{{ $person->tempatLahir }}</td>
                    <td class="border">{{ $person->tanggalLahir }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
