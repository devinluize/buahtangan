@extends('layouts.app')

@section('title', 'My Plants')

@section('sidebar')

@section('content')


<div class="flex ml-[5rem] mt-[6rem] flex-col">
    
    <h1 class="font-bold text-[64px] mx-auto">My Plant Album</h1>

    {{-- Placeholder untuk koleksi tanaman user --}}
    <div class="grid grid-cols-3 gap-[3rem] mt-20 ">
        @for ($i = 0 ; $i < 5 ; $i++)
        <div class="flex flex-col gap-4 w-[26rem] border border-normalGreen shadow-card rounded-[40px] mb-[3rem]">
            <h2 class="font-semibold text-[32px] text-center bg-normalGreen rounded-tl-[40px] rounded-tr-[40px]">Spinach</h2>
            <div class="flex flex-col gap-3 p-1 mb-[1.25rem]">
                <img src="{{'images/bayam.png'}}" alt="tanaman" class="w-[22rem] h-[22rem] mx-auto ">
                <p class="mx-[2rem] text-[24px] font-semibold font-beVietnam">Bayam-bayamku</p>
                <div class="flex flex-row mx-[2rem] text-[14px] font-beVietnam">
                    <p>10/10/2023</p>
                    -
                    <p>Now</p>
                </div>
            </div> 
        </div>
        @endfor

        <div class="border-[2px] border-dashed rounded-[1.25rem] w-[26rem] h-[33rem] border-gray-600 p-2 flex flex-col">
            <div class="flex flex-col mt-[9rem] mx-auto">
                <a href="/my-plants-add-album" class="mt-[2rem] w-[4rem] h-[4rem] mx-auto border-[6px] border-gray-600 rounded-full font-bold text-gray-600 text-[36px]  text-center cursor-pointer">+</a>
                <p class="font-beVietnam text-center text-[32px] text-gray-600 ">Add more plants</p>
            </div>

        </div>
    </div>
</div>

@endsection