@extends('layouts.app')

@section('title', '/')

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>InnoVixus</title>
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
        background-image: url("{{asset('assets/bg.png')}}");
        background-repeat: repeat;
        background-size: auto; 
    }
    </style>
    <link rel="icon" href="{{asset('assets/IV1.png') }}" type="image/x-icon">
</head>

<body class="bg-image">
<header id="home" class="relative flex items-center justify-center" style="margin-bottom: 50px;">
    <img src="{{asset('assets/hooo.png')}}" alt="Background Image" class="w-full h-full object-cover absolute inset-0 z-0">
    <div class="relative z-10 text-center max-w-lg mx-auto">
        <div class="relative">
            <h1 class="text-4xl font-semibold text-black" style="font-family: 'Exo', sans-serif;">InnoVixus</h1>
            <p class="text-sm text-black mt-2" style="font-family: 'Exo', sans-serif;">
            Selamat datang di InnoVixus, tempatnya solusi sederhana untuk kehidupan sehari-hari! Temukan berbagai fitur berguna. 
            Mari jelajahi dan manfaatkan kemudahan yang kami tawarkan untuk membuat hidup Anda lebih baik.
            </p>
            <div class="mt-4 space-x-4 flex justify-center">
                <a href="/register" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2" style="font-family: 'Exo', sans-serif;">Tiktok</a>
                <a href="/login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2" style="font-family: 'Exo', sans-serif;">Instagram</a>
            </div>
        </div>
    </div>
</header>

<div id="default-carousel" class="relative w-full mx-auto max-w-screen-lg mb-14" data-carousel="slide" >
        <div class="relative w-full pb-[50%] md:w-[95%] md:pb-[50%] mx-auto overflow-hidden rounded-lg">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/bmi">
                    <img src="{{asset('assets/bmi.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/konversi">
                    <img src="{{asset('assets/kmu.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/mental">
                    <img src="{{asset('assets/mht.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div>
            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="/route4">
                    <img src="{{asset('assets/comingsoon.png')}}" class="absolute block w-full h-full object-cover" alt="...">
                </a>
            </div> -->
        </div>
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-[100%] w-[15%] px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-700/30 dark:bg-gray-800/30 group-hover:bg-blue-700/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-[100%] w-[15%] px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-700/30 dark:bg-gray-800/30 group-hover:bg-blue-700/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
</div>

<div class="flex justify-center flex-wrap mb-14">
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <div class="relative">
                    <img class="w-full h-auto rounded-t-lg object-cover" src="{{asset('assets/saran.png')}}" alt="InnoVixus" style="max-height: 300px;" />
                </div>
            </a>
            <div class="p-4">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Saran Fitur</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Kami selalu berusaha untuk meningkatkan aplikasi ini dan pendapat Anda sangat berharga! Gunakan fitur saran ini untuk berbagi ide-ide brilian, memberikan umpan balik, atau menyarankan perbaikan. Jadilah bagian penting dari perkembangan InnoVixus!</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <div class="relative">
                    <img class="w-full h-auto rounded-t-lg object-cover" src="{{asset('assets/source.png')}}" alt="Picture 2024" style="max-height: 300px;" />
                </div>
            </a>
            <div class="p-4">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Source Code</h5>
                </a>
                <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Penasaran bagaimana website ini dibuat? Cari tahu melalui source code kami! Temukan cara kerjanya, pelajari proses pengembangannya, dan siapa tahu, mungkin Anda terinspirasi. Mari kita bangun sesuatu yang luar biasa bersama!</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>


<section class="container mx-auto px-6 py-1">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-2/3 p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-6">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Our Supporters</h2>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">We are grateful for the support of these amazing individuals.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-700 dark:border-gray-600 p-4">
                    <h3 class="text-xl font-bold text-gray-900 text-center dark:text-white mb-4">Supporters List</h3>
                    <ul id="supporters-list" class="text-gray-700 text-center dark:text-gray-400 space-y-2">
                    </ul>
                    </ul>
                    <p class="text-gray-600 dark:text-gray-400 text-center mt-4">Your name will be here if you support our website!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    const supporters = [
        'Reigners'
        // 'John Doe'        
    ];

    const supportersList = document.getElementById('supporters-list');
    supporters.forEach(supporter => {
        const listItem = document.createElement('li');
        listItem.textContent = supporter;
        supportersList.appendChild(listItem);
    });
</script>


<!-- <div class="box-event w-full mx-auto items-center" style="margin-top: 50px;">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 " style="margin-left: 20px; text-align: center; margin-bottom:20px;">Supported by:</h1>
    <div class="slider relative overflow-hidden w-full items-center">
      <div class="overlay absolute inset-0 bg-white opacity-100"></div>
        <div class="slider-bg-gradient absolute top-0 left-0 right-0 bottom-0 z-10 pointer-events-none"></div>
        <div class="slide-track flex space-x-4 items-center" id="slider-track">
        </div>
    </div>
</div>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }
    .box-event .slider {
        height: auto;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .box-event .slider:before,
    .box-event .slider:after {
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .box-event .slider:after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }
    .box-event .slider:before {
        left: 0;
        top: 0;
    }
    .box-event .slide-track {
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 500);  /*ubah 500 sesuai duplikasi e*/
    }
    .box-event div.slide {
        padding: 0 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

<script>
    const sponsorImages = [
        "{{asset('assets/IV1.png')}}",
        "{{asset('assets/IV1.png')}}"
    ];
    const sliderTrack = document.getElementById('slider-track');

    const duplicateTimes = 500; // Ubah sampai unli
    for (let i = 0; i < duplicateTimes; i++) {
        sponsorImages.forEach(image => {
            const slideDiv = document.createElement('div');
            slideDiv.className = 'slide';
            const img = document.createElement('img');
            img.src = image;
            img.alt = 'Sponsor';
            img.className = 'h-16';
            slideDiv.appendChild(img);
            sliderTrack.appendChild(slideDiv);
        });
    }
</script> -->
</body>
