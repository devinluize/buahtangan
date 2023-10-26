<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body class="flex flex-row">
    <nav class="flex flex-col bg-lightGreen w-[23rem] h-screen">
        <img src={{asset('images/BuahTanganSymbolNav.png')}} class="w-[20rem] object-contain mb-12">
        <div class="flex flex-col w-[20rem] text-[20px] ml-[4rem]">
            <ul class="flex flex-col justify-between h-[30rem]">
                <li class="@if(request()->is('/')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer  p-2 ">
                    <img src={{asset('images/iconHome.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>Home</a>
                    @if(request()->is('/'))
                    <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                    @endif
                </li>

                <li class="@if(request()->is('/schedule')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconCalendar.png')}} class="w-[2rem] mr-4 ml-8">
                   <a>Schedule</a>
                   @if(request()->is('/'))
                   <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                   @endif
                </li>
                
                <li class="@if(request()->is('/explore')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconExplore.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>Explore</a>
                    @if(request()->is('/'))
                    <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                    @endif
                </li>

                <li class="@if(request()->is('/my-plants')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconMyPlants.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>My Plants</a>
                </li>

                <li class="@if(request()->is('/my-course')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconMyCourses.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>My Course</a>
                    @if(request()->is('/'))
                    <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                    @endif
                </li>

                <li class="@if(request()->is('/profile')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconProfile.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>Profile</a>
                    @if(request()->is('/'))
                    <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                    @endif
                </li>

                <li class="@if(request()->is('/about-us')) bg-white rounded-l-full @endif flex flex-row items-center cursor-pointer p-2">
                    <img src={{asset('images/iconAboutUs.png')}} class="w-[2rem] mr-4 ml-8">
                    <a>About Us</a>
                    @if(request()->is('/'))
                    <div class="absolute bg-lightGreen w-4 h-4 rounded-full ml-[17.5rem]"></div>
                    @endif
                </li>
            </ul>
        </nav>
</body>
</html>
