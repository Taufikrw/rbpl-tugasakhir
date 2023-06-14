@extends('layouts.main')
@section('content')
    <div class="container px-20 py-11 h-full">
      <h1 class="mb-5 relative right-1/2 translate-x-1/2 text-4xl font-bold top-0 text-center">Pilih Mata Pelajaran!!</h1>
      <div class="w-full grid justify-items-center">
        <div class="max-h-[70vh] w-3/5 overflow-y-auto border rounded-lg scrollbar-none">
          <table class="w-full table-auto border border-gray-300">
              <thead>
                <tr>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama Mata Pelajaran</th>
                    <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($daftarMapel as $mapel)
              <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                  <td class="py-2 px-4 border-b">{{ $mapel->matkulName }}</td>
                  <td class="py-2 px-4 border-b">
                    <a href="/guru/membuatKuis/{{ $mapel->id }}/create">
                    <x-heroicon-o-arrow-top-right-on-square class="w-6 mx-auto" />
                    </a>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      </div>
@endsection
