@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InnoVixus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        header {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        header iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        body {
            background-image: url("{{ asset('assets/bg.png') }}");
            background-repeat: repeat;
            background-size: auto;
        }
    </style>
</head>

<body class="bg-image">
    <div class= "min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-4 text-center">Konversi Mata Uang</h1>
            <form id="currency-form" class="space-y-4">
                <div class="flex flex-col">
                    <label for="amount" class="text-lg font-medium">Masukkan Jumlah:</label>
                    <input type="number" id="amount" name="amount" placeholder="Masukkan jumlah..." class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="from" class="text-lg font-medium">Dari Mata Uang:</label>
                    <select id="from" name="from" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="to" class="text-lg font-medium">Ke Mata Uang:</label>
                    <select id="to" name="to" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Konversi</button>
            </form>
            <div id="result" class="mt-4 text-center"></div>
        </div>
    </div>
    <script src="{{ asset('assets/js/konversi.js') }}"></script>
</body>
</html>
@endsection
