@extends('layouts.app')

@section('title', 'My Course')

@section('sidebar')

@section('content')

<p>
<div class="flex ml-[6rem] mt-[6rem] flex-col">
    <div class="flex  flex-row">
        <div class="flex flex-col">
            <h1 class="font-semibold text-[34px] mb-4 ml-3">Search Course</h1>
        </div>
    </div>
    <div class="relative flex items-center">
        <input type="text" class="bg-lightGreen rounded-full px-10 py-3 pl-14 outline-none w-[50rem] h-[3rem] shadow-md" placeholder="Learn New Courses and Explore New Possibilities!">
        <span class="absolute left-4 top-3 text-green-800">
            <img src="{{asset('images/searchIcon.png')}}" alt="course image" class="w-4 h-4 mt-2 ml-1">
        </span>
        <button class="ml-2 mt-1 w-[3rem] h-[3rem] flex items-center justify-center bg-lightGreen text-white rounded-full hover:bg-green-800 focus:outline-none shadow-md">
            <img src="{{asset('images/filterIcon.png')}}" alt="course image" class="w-7 h-7 mt-1">
        </button>
    </div>
    <div class="grid grid-cols-3 gap-4 place-items-start px-4">
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center px-2 relative"> 
            <div class="">
                <img src="{{asset('images/tomato.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/greenLinear.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Roma Tomato</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Solanum Lycopersicum</p>
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Beginner</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Fruits</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Outdoor</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center px-2">
            <div class="">
                <img src="{{asset('images/orchid.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/greenLinear.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Lady Slipper Orchid</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Paphiopedilum Glaucophyllum</p>
                        
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Advanced</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Flower</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Indoor</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center">
            <div class="">
                <img src="{{asset('images/tomato.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/spinach.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Spinach</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Solanum Lycopersicum</p>
                        
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Beginner</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Vegetables</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Versatile</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 place-items-start px-5">
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center px-2">
            <div class="">
                <img src="{{asset('images/tomato.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/greenLinear.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Roma Tomato</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Solanum Lycopersicum</p>
                        
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Beginner</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Fruits</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Outdoor</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center px-2">
            <div class="">
                <img src="{{asset('images/tomato.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/greenLinear.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Lady Slipper Orchid</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Paphiopedilum Glaucophyllum</p>
                        
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Advanced</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Flower</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Indoor</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
        <div class="mt-[3rem] grid grid-cols-3 gap-[5rem] mb-[5rem] items-center">
            <div class="">
                <img src="{{asset('images/tomato.png')}}" alt="course image" class="absolute z-0 w-[25rem] h-[17rem]">
                <img src="{{asset('images/greenLinear.png')}}" alt="course image" class="absolute mx- my- z-9 w-[24.8rem] h-[16.7rem]">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-green-600 rounded-full w-12 h-12 flex items-center justify-center ml-10 mt-10">
                    <p class="text-white">1/9</p>
                </div>
                <div class="mt-[9rem] ml-4 font-beVietnam">
                    <div class="z-10 relative mb-4">
                        <p class=" text-white text-[24px] font-beVietnam whitespace-pre">Spinach</p>
                        <p class="text-white italic font-beVietnam whitespace-pre">Solanum Lycopersicum</p>
                        
                        <div class="relative flex items-center">
                            <div class="relative flex items-center">
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Beginner</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Vegetables</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="z-10 relative mb-1 mx-1.5 shadow-md rounded-full">
                                    <p class="text-white font-medium text-[28px] ml-[7rem] z-2">
                                        <div class="bg-green-600 text-white rounded-full py-1  px-4 w-[6.5rem] h-[2rem] mt-3">
                                            <p class="font-beVietnam text-center">Versatile</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</div>
<div class="flex items-right justify-end pt-5">
    <div class="flex items-center mr-2">
        <button class="w-20 h-12 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-800">
            <img src="{{asset('images/Arrow 2.png')}}" alt="Left Arrow" class="w-15 h-4" />
        </button>
    </div>
    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
        <span class="text-white font-beVietnam text-3xl">1</span>
    </div>
    <div class="flex items-center ml-2">
        <button class="w-20 h-12 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-800">
            <img src="{{asset('images/Arrow 2.png')}}" alt="Right Arrow" class="w-15 h-4 rotate-180" />
        </button>
    </div>
</div>
</p>
@endsection
