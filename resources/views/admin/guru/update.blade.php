@extends('admin.edit')

@section('form')
    <form action="/admin/guru/{{ $guru->id }}" method="POST" class="flex">
        @method('put')
        @csrf
        <div class="basis-1/3 flex flex-wrap justify-center">
            <div class="border h-96 w-64 rounded-lg shadow-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/?human" alt="foto" class="object-cover h-full w-72">
            </div>
            <a href="#" class="py-2 px-5 h-fit bg-indigo-500 rounded-lg mt-3 text-white">Upload Foto</a>
        </div>
        <div class="basis-2/3 px-10 grid">
            <div class="grid grid-cols-2 h-96 max-h-96 overflow-auto scrollbar-none">
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="firstName">Nama Depan</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('firstName')
                is_validate
            @enderror"
                        type="text" id="firstName" name="firstName" placeholder="Masukkan nama depan"
                        value="{{ old('firstName', $guru->firstName) }}">
                    @error('firstName')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="lastName">Nama Depan</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('lastName')
                is_validate
            @enderror"
                        type="text" id="lastName" name="lastName" placeholder="Masukkan nama belakang"
                        value="{{ old('lastName', $guru->lastName) }}">
                    @error('lastName')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="nip">NIP</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('nip')
                is_validate
            @enderror"
                        type="text" id="nip" name="nip" placeholder="Masukkan nip"
                        value="{{ old('nip', $guru->nip) }}">
                    @error('nip')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="gender">Jenis
                        Kelamin</label>
                    @if (old('gender', $guru->gender) == 'Laki-Laki')
                        <input type="radio" id="laki" name="gender" value="Laki-Laki" class="mr-2" checked>
                    @else
                        <input type="radio" id="laki" name="gender" value="Laki-Laki" class="mr-2">
                    @endif
                    <label for="laki" class="text-gray-700">Laki-laki</label>
                    @if (old('gender', $guru->gender) == 'Perempuan')
                        <input type="radio" id="perempuan" name="gender" value="Perempuan" class="mr-2 ml-4" checked>
                    @else
                        <input type="radio" id="perempuan" name="gender" value="Perempuan" class="mr-2 ml-4">
                    @endif
                    <label for="perempuan" class="text-gray-700">Perempuan</label>
                    @error('gender')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="tempatLahir">Tempat
                        Lahir</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('tempatLahir')
                is_validate
            @enderror"
                        type="text" id="tempatLahir" name="tempatLahir" placeholder="Masukkan tempat lahir"
                        value="{{ old('tempatLahir', $guru->tempatLahir) }}">
                    @error('tempatLahir')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 ml-3">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="tanggalLahir">Tanggal
                        Lahir</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-full @error('tanggalLahir')
                is_validate
            @enderror"
                        type="date" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan tanggal lahir"
                        value="{{ old('tanggalLahir', $guru->tanggalLahir) }}">
                    @error('tanggalLahir')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 col-span-2">
                    <label class="block text-gray-700 text-md font-semibold mb-2" for="token">Token</label>
                    <input
                        class="border border-gray-300 outline-indigo-500 rounded-lg px-4 py-2 w-11/12 @error('token')
                is_validate
            @enderror"
                        type="text" id="token" name="token" placeholder="Masukkan token"
                        value="{{ old('token', $guru->token) }}">
                    <button type="button"
                        class="max-w-full p-1 outline outline-1 outline-gray-300 align-middle mb-1 rounded-lg hover:bg-indigo-500 hover:text-white"
                        onclick="generateNumber()">
                        <x-heroicon-o-arrow-path-rounded-square class="w-7" />
                    </button>
                    @error('token')
                        <div class="text-sm text-pink-700 ml-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input type="submit" value="Kirim"
                class="grid justify-self-end h-fit py-2 px-5 font-semibold bg-green-500 rounded-lg mt-3 text-white outline uppercase hover:text-green-500 hover:outline-green-500 hover:bg-white">
        </div>
    </form>
@endsection
