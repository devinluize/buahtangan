@extends('layouts.app')

@section('title', 'View Album');

@section('sidebar')

@section('content')

    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <h1 class="text-center font-bold text-[64px] mb-32">Bayam-bayamku</h1>

        <div class="grid grid-cols-3 gap-[3rem] mb-10">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex flex-col border-[0.3rem] border-lightGrey p-12 w-[27rem] h-[31rem] shadow-md">
                    <img src="{{ asset('images/Bayam.png') }}" alt="bayamku" class="w-[20rem] h-[20rem]">
                    <h2 class="mt-8 font-semibold text-[21px]">Bayam #1</h2>
                    <p class="text-[14px]">12/10/2023</p>
                </div>
            @endfor
            <div class="flex flex-col">
                {{-- <h1 class="mt-16 mb-[1rem] font-semibold text-[24px]">Add image</h1> --}}
                {{-- <div class="border w-[34rem] h-[21rem] p-4 border-dashed border-gray-500 rounded-sm"> --}}

                <div
                    class="border-[2px] border-dashed rounded-[1.25rem] w-[26rem] h-[33rem] border-gray-600 p-2 flex flex-col">
                    <div class="flex flex-col mt-[9rem] mx-auto">
                        <a href="/my-plants-add-album"
                            class="mt-[2rem] w-[4rem] h-[4rem] mx-auto border-[6px] border-gray-600 rounded-full font-bold text-gray-600 text-[36px]  text-center cursor-pointer">+</a>
                        <p class="font-beVietnam text-center text-[32px] text-gray-600 ">Add more Photo</p>
                    </div>
                </div>
            </div>
        </div>

    @endsection
