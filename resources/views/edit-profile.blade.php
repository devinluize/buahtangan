@extends('layouts.app')

@section('title', 'About Us')

@section('sidebar')

@section('content')
    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <form class="flex flex-col" method="post" action="{{ route('update_profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row justify-between mb-[3.5rem]">
                <h1 class="font-semibold text-[24px]">Edit Profile</h1>
                <div class="relative">
                    <!-- Hidden input field for file upload -->
                    <input type="file" id="plant_picture" name="plant_picture" class="hidden" />

                    <!-- Label associated with the input field -->
                    <label for="plant_picture">
                        <!-- Displaying user profile picture -->
                        <img src="{{ asset('storage/' . Auth::user()->path) }}" alt="profile picture"
                            class="mr-[6rem] border border-black rounded-full w-[10rem] h-[10rem] cursor-pointer">
                    </label>
                </div>

            </div>

            <div class="flex flex-row gap-[6rem]">
                <div class="flex flex-col">
                    <label for="name" class="font-semibold">Name</label>
                    <input value="{{ Auth::user()->username }}" type="text" name="name" id="name"
                        class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
                </div>

                <div class="flex flex-col">
                    <label for="username" class="font-semibold">Username</label>
                    <input value="{{ Auth::user()->username }}" type="text" name="username" id="username"
                        class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
                </div>
            </div>

            <label for="email" class="font-semibold mt-12">Email</label>
            <input value="{{ Auth::user()->email }}" type="email" name="email" id="email"
                class="border border-black w-[82.7rem] h-[3rem] rounded-xl p-2 mt-3">

            <div class="flex flex-row gap-[6rem] mt-12">
                <div class="flex flex-col">
                    <label for="phone" class="font-semibold">Phone</label>
                    <input value="{{ Auth::user()->phonenumber }}" type="text" name="phone" id="phone"
                        class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
                </div>
            </div>

            <div class="flex flex-row gap-[6rem] mt-12">
                <div class="flex flex-col">
                    <label for="current_password" class="font-semibold">Current Password</label>
                    <input type="password" name="current_password" id="current_password"
                        class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
                </div>

                <div class="flex flex-col">
                    <label for="new_password" class="font-semibold">New Password</label>
                    <input type="password" name="new_password" id="new_password"
                        class="border border-black w-[38rem] h-[3rem] rounded-xl p-2 mt-3">
                </div>
            </div>

            <div class="mt-[7rem] justify-end mr-[6rem] flex flex-row gap-8">
                <a href="/profile"
                    class="border px-[5rem] py-[0.5rem] rounded-3xl text-normalGreen cursor-pointer font-semibold">Cancel</a>
                <button type="submit"
                    class="border px-[5rem] py-[0.5rem] rounded-3xl bg-normalGreen text-white font-semibold">Save</button>
            </div>
        </form>
    </div>
@endsection
