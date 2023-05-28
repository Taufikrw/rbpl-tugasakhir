@extends('admin.add')

@section('form')
    <form action="{{ route('siswa.store') }}" method="POST" class="flex">
        @csrf
        <div class="basis-1/3 flex flex-wrap justify-center">
            <div class="border h-96 w-64 rounded-lg shadow-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/?human" alt="foto" class="object-cover h-full w-72">
            </div>
            <a href="#" class="py-2 px-5 h-fit bg-indigo-500 rounded-lg mt-3 text-white">Upload Foto</a>
        </div>
        <div class="basis-2/3 px-10 grid">
            <div class="grid grid-cols-2 h-96">
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="firstName">Nama Depan</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="firstName"
                        name="firstName" placeholder="Masukkan nama depan">
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="lastName">Nama Belakang</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="lastName"
                        name="lastName" placeholder="Masukkan nama belakang">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="nisn">NISN</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="nisn"
                        name="nisn" placeholder="Masukkan nisn">
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="gender">Jenis
                        Kelamin</label>
                    <input type="radio" id="laki" name="gender" value="laki" class="mr-2">
                    <label for="laki" class="text-gray-700">Laki-laki</label>
                    <input type="radio" id="perempuan" name="gender" value="perempuan" class="mr-2 ml-4">
                    <label for="perempuan" class="text-gray-700">Perempuan</label>
                    {{-- <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="jenisKelamin"
                        name="jenisKelamin" placeholder="Masukkan jenis kelamin"> --}}
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="tempatLahir">Tempat Lahir</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="tempatLahir"
                        name="tempatLahir" placeholder="Masukkan tempat lahir">
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="tanggalLahir">Tanggal
                        Lahir</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="date" id="tanggalLahir"
                        name="tanggalLahir" placeholder="Masukkan tanggal lahir">
                </div>
                <div class="mb-4 col-span-2">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="token">Token</label>
                    <input class="border border-gray-300 rounded-lg px-4 py-2 w-11/12" type="text" id="token"
                        name="token" placeholder="Masukkan token">
                    <button type="button"
                        class="max-w-full p-1 outline outline-1 outline-gray-300 align-middle mb-1 rounded-lg hover:bg-indigo-500 hover:text-white">
                        <x-heroicon-o-arrow-path-rounded-square class="w-7" />
                    </button>
                </div>
            </div>
            <input type="submit" value="Tambah"
                class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">
        </div>
    </form>
@endsection
