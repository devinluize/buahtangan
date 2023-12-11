@extends('layouts.app')

@section('title', 'My Plants')

@section('sidebar')

@section('content')

    <div class="flex ml-[5rem] mr-[5rem] mt-[6rem] flex-col">
        <h1 class="text-center mx-auto font-bold text-[56px] mb-16">Add Plant Album</h1>

        <div class="mx-auto border-[3px] p-12  mb-16">
            <form class="flex flex-col" method="POST" action="{{ route('add_photo', ['id' => $id]) }}"
                enctype="multipart/form-data">>
                @csrf
                <label for="albumName" class="m-2 font-semibold text-[24px] mb-[1rem]">Photo Name</label>
                <input type="text" name="plant_name" id="albumName"
                    class="mt-1 p-2 border-b-2 border-gray-300 outline-none w-[36rem] text-[18px] mb-[4rem]" required>

                <label for="albumDesc" class="m-2 font-semibold text-[24px] mb-[4rem]">Photo Description</label>
                <textarea name="plant_desc" id="albumDesc" class="border-[2px] p-2  w-[74rem] h-[21rem] resize-none mb-[6rem]"></textarea>

                <div class="flex flex-row mb-16 gap-32">
                    <div class="flex flex-col">
                        <h1 class="mt-16 mb-[1rem] font-semibold text-[24px]">Plant image</h1>
                        <div class="border w-[34rem] h-[21rem] p-4 border-dashed border-gray-500 rounded-sm">
                            <input type="file" id="imgInput" class="hidden" name="plant_picture">
                            <label for="imgInput" class="cursor-pointer">
                                <img src="{{ asset('images/cameraForm.png') }}" alt="camera form" class="mx-auto my-[7rem]">
                            </label>
                        </div>
                    </div>
                    {{-- <input type="file" name="plant_picture"> --}}
                </div>
                <button type="submit"
                    class="text-white text-center mx-auto mb-16 w-[32rem] h-[8rem] bg-normalGreen rounded-3xl font-semibold text-[24px]">Create
                    Photo</button>
            </form>
        </div>
    </div>

@endsection
