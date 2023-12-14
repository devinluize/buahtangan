@extends('layouts.app')

@section('title', 'course detail')

@section('sidebar')

@section('content')

    <div class="flex">
        <div class="w-[93.5rem] absolute h-[26.7rem] z-10 bg-black overflow-hidden opacity-[35%]"></div>
        <img src="{{ asset('images/cabbage-detail.png') }}" alt="course image" class="absolute z-0 w-[93.5rem] h-[26.7rem]">
        <div class="relative top-[16rem] left-[2rem]  z-10 flex flex-col text-left">
            {{-- Title & Scientific Names --}}
            <h2 class="text-white font-semibold text-[64px]">Cabbage</h2>
            <p class="text-white font-semibold text-[24px]">Solanum Lycopersicum</p>
        </div>
    </div>
    <div class="flex ml-[5rem] mt-[21rem] flex-col font-beVietnam">
        {{-- Card --}}
        {{-- {{ $steps }} --}}
        @foreach ($steps as $tr)
            <a href={{ route('detail', ['id' => $tr->id]) }}
                class="flex flex-row border-gray-400 border-2 w-[80rem] p-8 rounded-3xl mb-5 cursor-pointer">
                <img src="{{ asset('storage/' . $tr->path) }}" class="w-[9rem] h-[7rem]">

                <div class="flex flex-col my-auto">
                    <h2 class="font-semibold text-[24px]">{{ $tr->title }}</h2>
                    <p class="text-[18px]">{{ $tr->step_desc }}</p>
                </div>
            </a>
        @endforeach
    </div>

@endsection
