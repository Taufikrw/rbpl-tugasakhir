@extends('layouts.main')
@section('content')
    <div class="container px-20 py-11 h-full">
      <h1 class="mb-5 relative right-1/2 translate-x-1/2 text-4xl font-bold top-0">Daftar {{ $title }}</h1>
      <div class="max-h-[70vh] overflow-y-auto border rounded-lg scrollbar-none">
          <table class="w-full table-auto border border-gray-300">
            <thead>
              <tr>
                  <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama</th>
                  <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">NISN</th>
              </tr>
            </thead>
            <tbody>
              <a href="\asdadqwdada">
                <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                  <td class="py-2 px-4 border-b">adas</td>
                  <td class="py-2 px-4 border-b">asdas</td>
                </tr>
              </a>
          </tbody>
          </table>
      </div>
    </div>
@endsection
