@extends('layouts.app')

@section('title', 'View Album');

@section('sidebar')

@section('content')

<div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
    <h1 class="text-center font-bold text-[64px] mb-32">Bayam-bayamku</h1>

    <div class="grid grid-cols-3 gap-[3rem] mb-10">
        @for ($i =0 ; $i < 5; $i++)
        <div class="flex flex-col border-[0.3rem] border-lightGrey p-12 w-[27rem] h-[31rem] shadow-md">
            <img src="{{asset('images/Bayam.png')}}" alt="bayamku" class="w-[20rem] h-[20rem]">
            <h2 class="mt-8 font-semibold text-[21px]">Bayam #1</h2>
            <p class="text-[14px]">12/10/2023</p>
        </div>
        @endfor
    </div>
</div>

@endsection