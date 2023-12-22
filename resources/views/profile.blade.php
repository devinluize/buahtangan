@extends('layouts.app')

@section('title', 'Profile')

@section('sidebar')

@section('content')

    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col just">
        <div class="flex flex-row">
            <img src="{{ asset('storage/' . Auth::user()->path) }}" alt="profile picture"
                class="border border-black rounded-full w-[15rem] h-[15rem]">
            <img src="{{ asset('images/camera.png') }}" alt="camera" class="absolute w-12 h-12 ml-[11rem] mt-[12rem]">
            <div class="flex flex-col my-auto ml-20 gap-2">
                <p class="text-[24px] font-semibold">{{ Auth::user()->username }}</p>
                <p class="text-[24px] font-semibold text-gray-400">16 plants harvested</p>
            </div>
            <a href="/edit-profile"
                class="ml-[30rem] w-[16rem] h-[3rem] my-auto rounded-[40px] text-center cursor-pointer text-white font-semibold text-[18px] p-2 bg-gray-400">Edit
                Profile</a>
        </div>

        <div class="mt-[6.5rem]">
            <h2 class="mb-[5rem] text-[24px] text-gray-500">Account Information</h2>
            <div class="grid grid-cols-3 gap-28">
                <div>
                    <h3 class="text-gray-500 text-[24px] mb-4">Name</h3>
                    <p class="text-[24px]">{{ Auth::user()->username }}</p>
                </div>

                <div>
                    <h3 class="text-gray-500 text-[24px] mb-4">Email</h3>
                    <p class="text-[24px]">{{ Auth::user()->email }}</p>
                </div>

                <div>
                    <h3 class="text-gray-500 text-[24px] mb-4">Username</h3>
                    <p class="text-[24px]">{{ Auth::user()->username }}</p>
                </div>

                <div>
                    <h3 class="text-gray-500 text-[24px] mb-4">Phone</h3>
                    <p class="text-[24px]">{{ Auth::user()->phonenumber }}</p>
                </div>
            </div>
        </div>
        <a href="/logout">
            <button
                class="mt-[12rem] text-[28px] font-medium p-4 bg-normalGreen rounded-[40px] w-[25rem] h-[4.5rem] mx-auto text-center align-middle">Log
                Out</button>
        </a>
    </div>

@endsection
