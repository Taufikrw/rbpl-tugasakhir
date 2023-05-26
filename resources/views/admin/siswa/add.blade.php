@extends('admin.add')

@section('form')
    <div class="container h-full px-32 py-12">
        <h1 class="flex justify-center text-4xl font-bold mb-5">Tambah Siswa</h1>
        <div class="flex flex-wrap border h-[70vh] rounded-lg shadow-md p-10">
            <div class="basis-1/3 flex flex-wrap justify-center">
                <div class="border h-96 w-64 rounded-lg shadow-lg overflow-hidden">
                    <img src="https://source.unsplash.com/random/?human" alt="foto" class="object-cover h-full w-72">
                </div>
                <a href="#" class="py-2 px-5 h-fit bg-indigo-500 rounded-lg mt-3 text-white">Upload Foto</a>
            </div>
            <div class="basis-2/3 px-10 grid">
                <div class="grid grid-cols-2 h-96">
                    <div class="mb-4 col-span-2">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="nama">Nama</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="nama"
                            name="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="nisn">NISN</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="nisn"
                        name="nisn" placeholder="Masukkan nisn">
                    </div>
                    <div class="mb-4 ml-3">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="jenisKelamin">Jenis Kelamin</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="jenisKelamin"
                            name="jenisKelamin" placeholder="Masukkan jenis kelamin">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="tempatLahir">Tempat Lahir</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="text" id="tempatLahir"
                            name="tempatLahir" placeholder="Masukkan tempat lahir">
                    </div>
                    <div class="mb-4 ml-3">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="tanggalLahir">Tanggal Lahir</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-full" type="date" id="tanggalLahir"
                        name="tanggalLahir" placeholder="Masukkan tanggal lahir">
                    </div>
                    <div class="mb-4 col-span-2">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="token">Token</label>
                        <input class="border border-gray-300 rounded-lg px-4 py-2 w-11/12" type="text" id="token"
                        name="token" placeholder="Masukkan token">
                        <button class="max-w-full p-1 outline outline-1 outline-gray-300 align-middle mb-1 rounded-lg hover:bg-indigo-500 hover:text-white"><x-heroicon-o-arrow-path-rounded-square class="w-8"/></button>
                    </div>
                </div>
                <a href="#" class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">Tambah</a>
            </div>
        </div>
    </div>
@endsection
