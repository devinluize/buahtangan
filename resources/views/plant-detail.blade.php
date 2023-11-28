@extends('layouts.app')

@section('title', 'Plant Detail')

@section('sidebar')

@section('content')

<div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
    <h1 class="text-center font-bold text-[64px]">Bayam-bayamku</h1>

    <div class="flex flex-row mx-auto font-beVietnam justify-between mt-16 border-lightGrey border-[0.3rem] p-[4rem] w-[84rem] shadow-md">
        <div class="border-lightBlue border-2 rounded-full p-8 bg-lightBlue w-[20rem] h-[20rem]">
            <img src="{{asset('images/watering.png')}}" alt="Watering" class="w-[9rem] h-[9rem] mx-auto mt-8 mb-8">
            <p class="text-center mx-auto text-[18px] font-medium w-[9rem]">8h before watering</p>
        </div>

        <div class="border-lightBrown border-2 rounded-full p-8 bg-lightBrown w-[20rem] h-[20rem]">
            <img src="{{asset('images/fertilizing.png')}}" alt="Fertilizing" class="w-[9rem] h-[9rem] mx-auto mt-8 mb-8">
            <p class="text-center mx-auto text-[18px] font-medium w-[9rem]">8h before fertilizing</p>
        </div>

        <div class="border-lightGrey border-2 rounded-full p-8 bg-lightGrey w-[20rem] h-[20rem]">
            <img src="{{asset('images/pruning.png')}}" alt="Pruning" class="w-[9rem] h-[9rem] mx-auto mt-8 mb-8">
            <p class="text-center mx-auto text-[18px] font-medium w-[9rem]">8h before pruning</p>
        </div>
    </div>

    <div class="flex justify-between">
        <a href="/my-plants/plant-detail/view-album" class="flex flex-row font-beVietnam justify-between mt-16 border-lightGrey border-[0.3rem] p-[4rem] w-[26rem] h-[22rem] cursor-pointer shadow-md">
            <div class="mx-auto">
                <h2 class="font-semibold text-[24px] text-center">View Album</h2>
                <img src="{{asset('images/album.svg')}}" alt="View Album" class="h-[12rem] w-[12rem]">
            </div>
        </a>
    
        <div class="flex flex-col font-beVietnam justify-between mt-16 border-lightGrey border-[0.3rem] p-[4rem] w-[54rem] h-[22rem] cursor-pointer shadow-md">
            <h2 class="font-semibold text-[24px] text-center mb-3">Plant Stage</h2>
    
            <div class="flex flex-row justify-between">
                <div>
                    <img src="{{asset('images/grow1.png')}}" alt="grow stage1" class="h-[12rem] w-[12rem]">
                </div>
        
                <div>
                    <img src="{{asset('images/grow2.png')}}" alt="grow stage2" class="h-[12rem] w-[12rem]">
                </div>
        
                <div>
                    <img src="{{asset('images/grow3.png')}}" alt="grow stage3" class="h-[12rem] w-[12rem]">
                </div>
            </div>
    </div>

    

    </div>
</div>

@endsection