@extends('layouts.app')

@section('title', 'About Us')

@section('sidebar')

@section('content')
<div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
    <form class="flex flex-col">
        @csrf
        <div class="flex flex-row justify-between mb-[3.5rem]">
            <h1 class="font-semibold text-[24px]">Edit Profile</h1>
            <div class="relative">
                <input type="file" id="profileImage" name="profileImage" class="hidden" accept="image/*" />
                <label for="profileImage">
                    <img src="{{ asset('images/effel.png') }}" alt="profile picture" class="mr-[6rem] border border-black rounded-full w-[10rem] h-[10rem] cursor-pointer">
                </label>
            </div>
        </div>

        <div class="flex flex-row gap-[6rem]">
            <div class="flex flex-col">
                <label for="name" class="font-semibold">Name</label>
                <input type="text" name="name" id="name" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>

            <div class="flex flex-col">
                <label for="username" class="font-semibold">Username</label>
                <input type="text" name="username" id="username" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>
        </div>

        <label for="email" class="font-semibold mt-12">Email</label>
        <input type="email" name="email" id="email" class="border border-black w-[82.7rem] h-[3rem] rounded-xl p-2 mt-3">

        <div class="flex flex-row gap-[6rem] mt-12">
            <div class="flex flex-col">
                <label for="phone" class="font-semibold">Phone</label>
                <input type="text" name="phone" id="phone" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>

            <div class="flex flex-col">
                <label for="dob" class="font-semibold">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>
        </div>

        <div class="flex flex-row gap-[6rem] mt-12">
            <div class="flex flex-col">
                <label for="current_password" class="font-semibold">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>

            <div class="flex flex-col">
                <label for="new_password" class="font-semibold">New Password</label>
                <input type="password" name="new_password" id="new_password" class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
            </div>
        </div>
        
        <div class="mt-[7rem] justify-end mr-[6rem] flex flex-row gap-8">
            <a href="/profile" class="border px-[5rem] py-[0.5rem] rounded-3xl text-normalGreen cursor-pointer font-semibold">Cancel</a>
            <button type="submit" class="border px-[5rem] py-[0.5rem] rounded-3xl bg-normalGreen text-white font-semibold">Save</button>
        </div>
    </form>
</div>
@endsection