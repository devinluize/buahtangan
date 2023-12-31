@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')

@section('content')
    {{-- <p>{{ Auth::id() }}</p> --}}
    {{-- {{ dd(Auth::id()) }} --}}
    @guest
        <script>
            window.location = "{{ route('register') }}";
        </script>
    @endguest
    @auth
        {{-- {{ dd('dasd') }} --}}
        <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
            <div class="flex  flex-row">
                <div class="flex flex-col">
                    <h1 class="font-semibold text-[34px]">On going Courses</h1>
                    <p class="text-[12px] font-beVietnam">Keep on learning and growing!</p>
                </div>

                {{-- Display jumlah course yang sedang dijalani pada aplikasi --}}
                {{-- {{ $a = 0 }}
            @foreach ($sub as $s)
                {{ $a = $a + 1 }}
            @endforeach --}}
                <div class=" ml-4 mt-3 ">
                    <p class="bg-lightGreen w-[32px] h-[32px] text-center rounded-md pt-1 ">{{ $sub->count() }}</p>
                </div>
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
                    </div>
                @endforeach

                {{-- @endfor --}}

                <a href="/explore">
                    <div
                        class="border-[2px] border-dashed rounded-[1.25rem] w-[25rem] h-[17rem] border-normalGreen p-2 flex flex-col">
                        <p class="font-beVietnam text-center mt-[5rem] text-[32px] text-normalGreen">Add new course</p>
                        <button
                            class="mt-[2rem] w-[3rem] h-[3rem] mx-[10rem] border-[3px] border-normalGreen rounded-full font-bold text-normalGreen text-[24px] ">+</button>
                    </div>
                </a>
            </div>

            <div class="mt-[5rem]">
                <div class="flex  flex-row">
                    <div class="flex flex-col">
                        <h1 class="font-semibold text-[34px]">Recommended Courses</h1>
                        <p class="text-[12px] font-beVietnam">Learn new things along the way!</p>
                    </div>
                </div>
                <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center">
                    @foreach ($course as $crs)
                        <div class="">
                            <img src="{{ asset('storage/' . $crs->path) }}" alt="course image"
                                class="absolute z-0 w-[25rem] h-[17rem]">
                            <img src="{{ asset('images/greenLinear.png') }}" alt="course image"
                                class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">

                            <div class="mt-[9.5rem] ml-4 font-beVietnam">
                                <div class="z-10 relative mb-4">
                                    <p class=" text-white text-[24px] font-semibold ">{{ $crs->course_name }}</p>
                                    <p class="text-white">{{ $crs->course_detail }}</p>
                                </div>
                            </div>
                            <p class="font-semibold text-normalGreen text-[24px] text-center mt-[4.75rem]"><a
                                    href="{{ route('add_course_sub', ['id' => $crs->course_id]) }}"
                                    class="cursor-pointer">Start
                                    Now</a></p>
                        </div>
                    @endforeach

                    {{-- <div class="">
                    <img src="{{ asset('images/tomato.png') }}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                    <img src="{{ asset('images/greenLinear.png') }}" alt="course image"
                        class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">

                    <div class="mt-[9.5rem] ml-4 font-beVietnam">
                        <div class="z-10 relative mb-4">
                            <p class=" text-white text-[24px] font-semibold ">Tomato</p>
                            <p class="text-white">Soil and plant basics</p>
                        </div>
                    </div>
                    <p class="font-semibold text-normalGreen text-[24px] text-center mt-[4.75rem]"><a
                            class="cursor-pointer">Start Now</a></p>
                </div>

                <div class="">
                    <img src="{{ asset('images/tomato.png') }}" alt="course image"
                        class="absolute z-0 w-[25rem] h-[17rem]">
                    <img src="{{ asset('images/greenLinear.png') }}" alt="course image"
                        class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">

                    <div class="mt-[9.5rem] ml-4 font-beVietnam">
                        <div class="z-10 relative mb-4">
                            <p class=" text-white text-[24px] font-semibold ">Tomato</p>
                            <p class="text-white">Soil and plant basics</p>
                        </div>
                    </div>
                    <p class="font-semibold text-normalGreen text-[24px] text-center mt-[4.75rem]"><a
                            class="cursor-pointer">Start Now</a></p>
                </div> --}}
                </div>
            @endauth
        @endsection
