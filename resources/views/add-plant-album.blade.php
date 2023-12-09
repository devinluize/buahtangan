@extends('layouts.app')

@section('title', 'My Plants')

@section('sidebar')

@section('content')

    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <h1 class="text-center mx-auto font-bold text-[56px] mb-16">Add Plant Album</h1>

        <div class="mx-auto border-[3px] p-12  mb-16">
            <form class="flex flex-col">
                @csrf
                <label for="albumName" class="m-2 font-semibold text-[24px] mb-[1rem]">Album Name</label>
                <input type="text" name="albumName" id="albumName"
                    class="mt-1 p-2 border-b-2 border-gray-300 outline-none w-[36rem] text-[18px] mb-[4rem]" required>

                <label for="albumDesc" class="m-2 font-semibold text-[24px] mb-[4rem]">Album Description</label>
                <textarea name="albumDesc" id="albumDesc" class="border-[2px] p-2  w-[74rem] h-[21rem] resize-none mb-[6rem]"></textarea>

                <label for="plantSpecies" class="m-2 font-semibold mb-4 text-[24px]">Select Option</label>
                <select id="plantSpecies" name="plantSpecies" class="m-2 text-[18px] border-2 p-2  w-[74rem] h-[7rem]">
                    <option value="spinach" class="text-[18px]">Spinach</option>
                    <option value="romaTomato" class="text-[18px]">Roma Tomato</option>
                    <option value="ladySlipperOrchid" class="text-[18px]">Lady Slipper Orchid</option>
                </select>

                <div class="flex flex-row mb-16 gap-32">
                    <div class="flex flex-col">
                        <h1 class="mt-16 mb-[1rem] font-semibold text-[24px]">Cover image</h1>
                        <div class="border w-[34rem] h-[21rem] p-4 border-dashed border-gray-500 rounded-sm">
                            <input type="file" id="imgInput" class="hidden" name="plant_picture" accept="image/*" />
                            <label for="imgInput" class="cursor-pointer">
                                <img src="{{ asset('images/cameraForm.png') }}" alt="camera form" class="mx-auto my-[7rem]">
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="mt-16 mb-[1rem] font-semibold text-[24px]">Status</h1>
                        <label
                            class="bg-lightGreen p-10 w-[32rem] mb-[2rem] font-semibold text-[24px] rounded-3xl text-center cursor-pointer focus-within:bg-normalGreen focus-within:text-white transition-all duration-100">
                            <input type="radio" name="status" value="ongoing" class="opacity-0">
                            On-going
                        </label>

                        <label
                            class="bg-lightGreen p-10 w-[32rem] font-semibold text-[24px] rounded-3xl text-center cursor-pointer focus-within:bg-normalGreen focus-within:text-white transition-all duration-100">
                            <input type="radio" name="status" value="done" class="opacity-0">
                            Done at ...
                        </label>
                    </div>
                </div>
                <button type="submit"
                    class="text-white text-center mx-auto mb-16 w-[32rem] h-[8rem] bg-normalGreen rounded-3xl font-semibold text-[24px]">Create
                    Album</button>
            </form>
        </div>
    </div>

@endsection
