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
        body {
            background-image: url("{{ asset('assets/bg.png') }}");
            background-repeat: repeat;
            background-size: auto;
        }
    </style>
</head>

<body class="bg-image">
    <div class="min-h-screen flex flex-wrap justify-center mt-24">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl">
            <h1 class="text-2xl font-semibold mb-4 text-center">Tes Kondisi Mental</h1>
            <form id="mental-health-form" class="space-y-4">
                @csrf
                @foreach([
                    'Saya merasa cemas atau khawatir secara berlebihan.' => 'anxiety',
                    'Saya merasa sedih atau tertekan tanpa alasan yang jelas.' => 'depression',
                    'Saya kesulitan untuk tidur atau tidur terlalu banyak.' => 'stress',
                    'Saya merasa tidak berenergi atau lelah sepanjang waktu.' => 'stress',
                    'Saya merasa kesulitan untuk berkonsentrasi atau membuat keputusan.' => 'depression',
                    'Saya merasa gelisah atau tidak bisa duduk diam.' => 'anxiety',
                    'Saya kehilangan minat pada aktivitas yang biasanya saya nikmati.' => 'depression',
                    'Saya mengalami perubahan nafsu makan atau berat badan yang signifikan.' => 'stress',
                    'Saya merasa terlalu mudah marah atau frustrasi.' => 'stress',
                    'Saya sering merasa tidak berharga atau bersalah.' => 'depression',
                    'Saya sering merasa takut tanpa alasan yang jelas.' => 'anxiety',
                    'Saya merasa bahwa hidup tidak layak untuk dijalani.' => 'depression',
                    'Saya sering merasa tegang atau sulit untuk rileks.' => 'anxiety',
                    'Saya merasa mudah lelah bahkan setelah beristirahat.' => 'stress',
                    'Saya merasa kesulitan untuk menjalankan tugas harian saya.' => 'depression',
                    'Saya merasa bahwa saya tidak bisa menyelesaikan tugas-tugas yang saya harus selesaikan.'=> 'stress',
                    'Saya merasa tidak bersemangat dalam melakukan aktivitas sehari-hari.' => 'depression',
                    'Saya merasa bahwa saya tidak dapat menangani masalah atau stres yang saya hadapi.' => 'anxiety',
                    'Saya merasa bahwa saya tidak bisa mengendalikan perasaan atau emosi saya.' => 'anxiety',
                    'Saya merasa tegang atau sulit untuk rileks dalam situasi tertentu.' => 'anxiety',
                    'Saya merasa bahwa saya tidak dapat mengatasi tekanan kerja atau tugas yang harus diselesaikan.' => 'stress'
                ] as $question => $category)
                    <div class="flex flex-col">
                        <label for="question{{ $loop->index }}" class="text-lg font-medium">{{ $question }}</label>
                        <select name="answers[]" id="question{{ $loop->index }}" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                            <option value="0">0: Tidak pernah</option>
                            <option value="1">1: Jarang</option>
                            <option value="2">2: Kadang-kadang</option>
                            <option value="3">3: Sering</option>
                            <option value="4">4: Sangat sering</option>
                            <option value="5">5: Selalu</option>
                        </select>
                    </div>
                @endforeach
                <button type="button" onclick="calculateResults()" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
            </form>
            <div id="result" class="mt-4 text-center"></div>
        </div>
    </div>
    <script src="{{ asset('assets/js/mental.js') }}"></script>
</body>
</html>
@endsection
