@extends('layouts.app')

@section('title', 'Schedule')

@section('sidebar')

@section('content')

<p>
<div class="max-w-2xl mx-auto bg-white font-beVietnam pt-10">
    <div class="bg-white text-center text-black p-4 flex items-center justify-between">
        <div class="flex items-center">
            <button class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-400">
                <span class="text-center text-sm font-semibold text-black font-beVietnam text-2xl"><</span>
            </button>
        </div>

        <h2 class="text-xl font-semibold font-beVietnam">November 2023</h2>

        <div class="flex items-center">
            <button class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-400">
                <span class="text-center text-sm font-semibold text-black font-beVietnam text-3xl">></span>
            </button>
        </div>

    </div>

    
    <div class="grid grid-cols-7 gap-y-6 gap-x-32 mt-6 justify-center">

        @for ($day = 1; $day <= 31; $day++)
            <div class="text-center text-sm font-beVietnam">
                @if ($day <= 7)
                    <div class="text-center text-sm font-semibold text-gray-400 font-beVietnam mb-2">
                        {{ \Carbon\Carbon::create(2023, 11, $day)->startOfWeek()->addDays($day - 1)->format('D') }}
                    </div>
                @endif
                <div class="ml-2">
                    {{ $day }}
                </div>
            </div>
        @endfor

    </div>
</div>
<div class="max-w-full mx-auto mt-8 pt-20 pl-20 bg-white">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold mr-2 font-beVietnam">Schedule</h1>
        <button class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center">
            +
        </button>
    </div>

    <div class="flex mb-4">
        <div class="h-36 w-16 bg-green-600 rounded-tl-lg rounded-bl-lg"></div>
        <div class="flex-1 bg-green-600 bg-opacity-25 p-4 rounded-tr-lg rounded-br-lg">
            <div class="flex justify-between mb-2">
                <p class="text-2xl text-green-600 font-beVietnam font-bold">Water the Plant</p>
                <p class="text-green-600 font-beVietnam">23 August 2023</p>
            </div>
            <p class="text-green-600 mb-2 font-beVietnam">Beansprout needs your care, water the plant now.</p>
            <div class="flex items-center pt-4">
                <img src="{{ asset('images/clock.png') }}" alt="Clock" class="w-6 h-6 mr-2 clock-icon-green">
                <p class="text-green-600 font-beVietnam">09:00 - 10:00</p>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="h-36 w-16 bg-[#B8922F] rounded-tl-lg rounded-bl-lg"></div>
        <div class="flex-1 bg-[#B8922F] bg-opacity-25 p-4 rounded-tr-lg rounded-br-lg">
            <div class="flex justify-between mb-2">
                <p class="text-2xl text-[#B8922F] font-beVietnam font-bold">Fertilize the Plant</p>
                <p class="text-[#B8922F] font-beVietnam">24 August 2023</p>
            </div>
            <p class="text-[#B8922F] text-sm mb-2 font-beVietnam">Beansprout needs your care, fertilize the plant now.</p>
            <div class="flex items-center pt-4">
                <img src="{{ asset('images/clock.png') }}" alt="Clock" class="w-6 h-6 mr-2 clock-icon-green">
                <p class="text-[#B8922F] font-beVietnam">11:00 - 13:00</p>
            </div>
        </div>
    </div>
</div>


</p>
@endsection
