@extends('layouts.app')

@section('title', 'Preparing Soil')

@section('sidebar')

@section('content')
    {{-- @foreach ($steps as $step) --}}
    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <h1 class="mx-auto font-bold text-[64px]">{{ $step->title }}</h1>
        <p class="text-[22px] font-medium mb-8 font-beVietnam text-justify w-[70rem] mx-auto">
            {{ $step->step_desc_first }}
        </p>
        <img src="{{ asset('storage/' . $step->path) }}" alt="soil" class="w-[45rem] h-[45rem] mx-auto mb-4">
        <p class="font-beVietnam text-[18px] text-justify w-[70rem] mx-auto mt-4">{{ $step->step_desc_second }}
        </p>
    </div>
    {{-- @endforeach --}}
@endsection
