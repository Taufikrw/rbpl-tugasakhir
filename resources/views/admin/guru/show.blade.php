@extends('admin.show')

@section('show')
    <h1 class="flex justify-center text-4xl font-bold mb-5">{{ $guru->firstName }} {{ $guru->lastName }}</h1>
    <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
        <div class="basis-1/3 flex flex-wrap justify-center">
            <div class="border h-96 w-64 rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/photo-placeholder.jpg') }}" alt="foto" class="object-cover h-full w-72">
            </div>
        </div>
        <div class="basis-2/3 px-10 grid">
            <div class="grid h-96 max-h-96 overflow-auto scrollbar-none">
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Nama Lengkap</span>
                    <span class="col-span-2 text-lg">: {{ $guru->firstName }} {{ $guru->lastName }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Username</span>
                    <span class="col-span-2 text-lg">: {{ $guru->username }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">NIP</span>
                    <span class="col-span-2 text-lg">: {{ $guru->nip }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Jenis Kelamin</span>
                    <span class="col-span-2 text-lg">: {{ $guru->gender }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Tempat Lahir</span>
                    <span class="col-span-2 text-lg">: {{ $guru->tempatLahir }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Tanggal Lahir</span>
                    <span class="col-span-2 text-lg">: {{ $guru->tanggalLahir }}</span>
                </div>
                <div class="grid grid-cols-3 py-2">
                    <span class="font-semibold text-lg">Token</span>
                    <span class="col-span-2 text-lg">: {{ $guru->token }}</span>
                </div>
            </div>
            <div class="flex flex-row-reverse gap-3">
                <a href="/admin/guru/{{ $guru->id }}/edit"
                    class="grid justify-self-end h-fit py-2 px-5 mt-3 edit-btn">Edit</a>
                <form action="/admin/guru/{{ $guru->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button
                        class="grid justify-self-end h-fit py-2 px-5 mt-3 remove-btn"
                        onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection
