@extends('login.main')

@section('form')
    <div class="flex h-screen justify-center items-center">
        <div class="border rounded-md w-[500px]">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="border" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="border" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="border bg-green-500">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        @if (session('massage'))
            alert("{{ session('massage') }}");
        @endif
    </script>
@endsection
