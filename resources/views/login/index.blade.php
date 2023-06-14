@extends('login.main')

@section('form')
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-sm">
            <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500"
                        type="text" name="username" id="username" class="border" required placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500"
                        id="password" type="password" name="password" required placeholder="Password">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Log In
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2023 Grade Master. All rights reserved.
            </p>
        </div>
    </div>
    <script>
        @if (session('massage'))
            alert("{{ session('massage') }}");
        @endif
    </script>
@endsection
