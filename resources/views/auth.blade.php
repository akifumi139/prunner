<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prunner</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-6">プランニングシステムへようこそ</h2>
            @if ($errors->any())
            <div class="mb-4">
                <div class="text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <form action="{{route('auth.login')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2">name</label>
                    <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2">
                </div>
                <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 w-full">Login</button>
            </form>
        </div>
    </div>
</body>

</html>