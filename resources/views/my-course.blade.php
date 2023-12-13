@extends('layouts.app')

@section('title', 'My Course')

@section('sidebar')

@section('content')

    <p>
    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <div class="flex  flex-row">
            <div class="flex flex-col">
                <h1 class="font-semibold text-[34px] mb-4 ml-3">Search Course</h1>
            </div>
        </div>
        <div class="relative flex items-center">
            <input type="text"
                class="bg-lightGreen rounded-full px-10 py-3 pl-14 outline-none w-[50rem] h-[3rem] shadow-md"
                placeholder="Learn New Courses and Explore New Possibilities!">
            <span class="absolute left-4 top-3 text-green-800">
                <img src="{{ asset('images/searchIcon.png') }}" alt="course image" class="w-4 h-4 mt-2 ml-1">
            </span>
            <button
                class="ml-2 mt-1 w-[3rem] h-[3rem] flex items-center justify-center bg-lightGreen text-white rounded-full hover:bg-green-800 focus:outline-none shadow-md">
                <img src="{{ asset('images/filterIcon.png') }}" alt="course image" class="w-7 h-7 mt-1">
            </button>
        </div>
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center">

            {{-- placeholder untuk ongoing course, for nanti ganti ke foreach menyesuaikan --}}
            {{-- @for ($i = 0; $i < 5; $i++) --}}
            @foreach ($sub as $s)
                <div class="">
                    <img src="{{ asset('storage/' . $s->course->path) }}" alt="course image"
                        class="absolute z-0 w-[25rem] h-[17rem]">
                    <img src="{{ asset('images/greenLinear.png') }}" alt="course image"
                        class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                    <div
                        class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                        <p class="text-white">{{ $s->step }}/9</p>
                    </div>
                    <div class="mt-[9rem] ml-4 font-beVietnam">
                        <div class="z-10 relative mb-4">
                            <p class=" text-white text-[24px] font-beVietnam ">{{ $s->course->course_name }}</p>
                            <p class="text-white italic font-beVietnam ">{{ $s->course->scientific_name }}</p>
                            <div class="relative flex items-center">
                                <div class="relative flex items-center">
                                    <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                        <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div
                                            class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">{{ $s->course->course_dif }}</p>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                        <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div
                                            class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">{{ $s->course->course_type }}</p>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                        <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div
                                            class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">{{ $s->course->course_place }}</p>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="">
                    <img src="{{ asset('storage/' . $s->course->path) }}" alt="course image"
                        class="absolute z-0 w-[25rem] h-[17rem]">
                    <img src="{{ asset('images/greenLinear.png') }}" alt="course image"
                        class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">

                    <div class="mt-[9.5rem] ml-4 font-beVietnam">
                        <div class="z-10 relative mb-4">
                            <p class=" text-white text-[24px] font-semibold ">{{ $s->course_name }}</p>
                            <p class="text-white">{{ $s->course_detail }}</p>
                        </div>

                        <div class="z-10 relative ">
                            <p class="text-white font-medium text-[28px] ml-[7rem] z-2">{{ $s->step }} / 9 Steps</p>
                        </div>
                    </div>
                    <p class="font-semibold text-normalGreen text-[24px] text-center mt-3"><a
                            class="cursor-pointer">Continue
                            Now</a></p>
                </div> --}}
            @endforeach

            {{-- @endfor --}}

            <div
                class="border-[2px] border-dashed rounded-[1.25rem] w-[25rem] h-[17rem] border-normalGreen p-2 flex flex-col">
                <p class="font-beVietnam text-center mt-[5rem] text-[32px] text-normalGreen">Add new course</p>
                <a href="/explore"><button
                        class="mt-[2rem] w-[3rem] h-[3rem] mx-[10rem] border-[3px] border-normalGreen rounded-full font-bold text-normalGreen text-[24px] ">+</button>
            </div></a>
        </div>
        {{-- @endfor ================== --}}

        {{-- Pagination --}}
        <div class="flex items-right justify-end pt-5">
            <div class="flex items-center mr-2">
                <button class="w-20 h-12 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-800">
                    <img src="{{ asset('images/Arrow 2.png') }}" alt="Left Arrow" class="w-15 h-4" />
                </button>
            </div>
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                <span class="text-white font-beVietnam text-3xl">1</span>
            </div>
            <div class="flex items-center ml-2">
                <button class="w-20 h-12 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-800">
                    <img src="{{ asset('images/Arrow 2.png') }}" alt="Right Arrow" class="w-15 h-4 rotate-180" />
                </button>
            </div>
        </div>
    </div>
    </p>
@endsection
