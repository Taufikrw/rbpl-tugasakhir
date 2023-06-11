@extends('layouts.main')
@section('content')
    <div class="container px-20 py-11 h-full">
      <h1 class="mb-5 relative right-1/2 translate-x-1/2 text-4xl font-bold top-0 text-center">Daftar Mapel</h1>
      {{-- <div class="max-h-[70vh] overflow-y-auto border rounded-lg scrollbar-none">
          <table class="w-full table-auto border border-gray-300">
            <thead>
              <tr>
                  <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Mata Pelajaran</th>
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
      </div> --}}
      <div class="h-100 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @foreach ($daftarMapel as $mapel)
      <div class="rounded-2xl bg-gray-50 mx-2 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 border border-gray-400 border-2 h h-100 hover:border-gray-600 transition-colors">
        <div class="mx-auto max-w-xs px-8">
          <a href="/guru/pengolahanNilai/inputNilai/{{ $mapel->matkulName }}/create" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            {{ $mapel->matkulName }}
          </a>
          <p class="mt-6 text-xs leading-5 text-gray-600">Invoices and receipts available for easy company reimbursement</p>
        </div>
      </div>
      @endforeach
      </div>
      
    </div>
@endsection
