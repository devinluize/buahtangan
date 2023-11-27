@extends('layouts.app')

@section('title', 'Picture Plant')

@section('sidebar')

@section('content')

<div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
    <h1 class="text-center font-bold mb-16 text-[64px]">Picture the lil fella!</h1>

    <div class="flex flex-col mx-auto">
        <div class="border w-[79rem] h-[40rem] p-4 border-dashed border-gray-500 rounded-sm">
            <input type="file" id="imgInput" class="hidden" accept="image/*" />
            <label for="imgInput" class="cursor-pointer">
                <img src="{{ asset('images/cameraForm.png') }}" alt="camera form" class="mx-auto mt-[15rem]">
                <p class="text-center mt-4 font-bold text-[18px] text-gray-500">Pick an image!</p>
            </label>
        </div>                   
    </div>

    <button type="submit" class="text-white mt-16 text-center mx-auto mb-16 w-[32rem] h-[8rem] bg-normalGreen rounded-3xl font-semibold text-[24px]">Submit Photo</button>
</div>
@endsection