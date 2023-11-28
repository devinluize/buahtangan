@extends('layouts.app')

@section('title', 'course detail')

@section('sidebar')

@section('content')

<div class="flex">
    <div class="w-[93.5rem] absolute h-[26.7rem] z-10 bg-black overflow-hidden opacity-[35%]"></div>
    <img src="{{asset('images/cabbage-detail.png')}}" alt="course image" class="absolute z-0 w-[93.5rem] h-[26.7rem]">
    <div class="relative top-[16rem] left-[2rem]  z-10 flex flex-col text-left">
        {{-- Title & Scientific Names --}}
        <h2 class="text-white font-semibold text-[64px]">Cabbage</h2> 
        <p class="text-white font-semibold text-[24px]">Solanum Lycopersicum</p>
    </div>
</div>
<div class="flex ml-[5rem] mt-[21rem] flex-col font-beVietnam">
    {{-- Card --}}
    <a href="/course-detail/preparing-soil" class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5 cursor-pointer">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Preparing Soil</h2>
            <p class="text-[18px]">let's prepare soil for the little fella!</p>
        </div>
    </a>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Planting</h2>
            <p class="text-[18px]">How would you like to plant them ?</p>
        </div>
    </div>

    <a href="/course-detail/picture-plant" class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5 cursor-pointer">
        <img src="{{asset('images/full-plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Picture the lil fella!</h2>
            <p class="text-[18px]">Capture this special part of their life</p>
        </div>
    </a>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Watering</h2>
            <p class="text-[18px]">How much do they drink?</p>
        </div>
    </div>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Fertilizing</h2>
            <p class="text-[18px]">How much do they eat?</p>
        </div>
    </div>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/full-plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Picture the growing fella!</h2>
            <p class="text-[18px]">To see and remember their growth</p>
        </div>
    </div>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Take care of spinach</h2>
            <p class="text-[18px]">To take care of their special needs!</p>
        </div>
    </div>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Harvesting</h2>
            <p class="text-[18px]">When to harvest?</p>
        </div>
    </div>

    <div class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5">
        <img src="{{asset('images/full-plant-detail.png')}}" class="w-[9rem] h-[7rem]">
        <div class="flex flex-col my-auto">
            <h2 class="font-semibold text-[24px]">Picture the harvest results!</h2>
            <p class="text-[18px]">Yum Yum!</p>
        </div>
    </div>   
</div>

@endsection