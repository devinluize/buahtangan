@extends('layouts.app')

@section('title', 'About Us')

@section('sidebar')

@section('content')

<div class="flex ml-[5rem] mt-[6rem] flex-col">
    <h1 class="text-[34px] font-semibold">About Us</h1>

    <div class="mt-[6rem] flex flex-row">
        <div class="flex flex-col mr-[10rem]">
            <img src="{{asset('images/aboutUsDecor.png')}}" alt="decoration" class="absolute z-0 h-[10rem] ">
            <h2 class="text-[40px] w-[32rem] font-bold z-10 relative">Menanam dengan mudah dan stress free</h2>

            <p class="w-[40rem] text-justify mt-[2rem] text-[28px]">
                Hobi berkebun atau baru mau memulai berkebun, tetapi bingung hal apa saja yang diperlukan untuk memulai harvesting? Dengan uluran tangan dari buahtangan maka anda tidak perlu bingung untuk memulai perjalanan berkebun anda.   
            </p>
            <button class="mt-[4rem]  flex flex-row w-[26.5rem] h-[4rem] bg-normalGreen rounded-md">
                <a  href="/explore" class="my-auto ml-auto text-white font-semibold text-[28px]">Mulai Menanam</a>
                <img src="{{asset('images/arrowButton.png')}}" alt="arrow" class="my-auto object-contain w-[2.5rem] ml-[1rem] mr-auto">
            </button>
        </div>
        <img src="{{asset('images/gambarNanem.png')}}" alt="gambar nanem" class="object-contain w-[38rem]">
    </div>


</div>
<div class="bg-gray-200 p-[9rem] mt-[20rem]">
    <p class="text-[28px] text-justify w-[75rem]">
        Buahtangan adalah sebuah platform yang menyediakan step by step tutorial untuk menanam dan merawat tanaman anda sesuai dengan lingkungan dan kemampuan masing-masing pengguna. Pengguna dapat memilih berbagai courses cara menanam sesuai keinginan masing-masing.
    </p>
</div>

@endsection