<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register page</title>
</head>

<body>
    <div class="flex flex-row">
        {{-- Main Background --}}
        <img src="{{ asset('images/AuthBackground.png') }}" class="absolute w-screen h-screen z-0">
        {{-- Authentication Form --}}
        {{-- @auth --}}

        <form method="POST" class="w-[40rem] h-screen p-12 bg-white z-10 absolute right-0" action="{{ route('register.action') }}">
            @method('post')
            @csrf
            <img src={{ asset('images/BuahTanganSymbol.png') }} class="w-[60rem] object-fill mb-12">

            <h2 class="text-[34px] mb-6 font-semibold text-blackGreen">Register</h2>
            {{-- <p>dasdasdas</p> --}}
            <div class="flex flex-col font-poppins font-medium">
                <label class="text-[18px] text-blackGreen">Username</label>
                <input type="text" name="username"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>

                    
                    <label class="text-[18px] text-blackGreen">Phone number</label>
                    <input type="number" name="phonenumber"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>
                    
                    <label class="text-[18px] text-blackGreen">Email</label>
                    <input type="email" name="email"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>
                
                    <label class="text-[18px] text-blackGreen">Password</label>
                    <input type="password" name="password"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>

                    <label class="text-[18px] text-blackGreen">Password Confirmation</label>
                    <input type="password" name="password_confirmation"
                    class="bg-lightGreen shadow-md mb-12 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>

            </div>
            <button type="submit"
                class="bg-lightGreen p-3 font-bold text-2xl w-[32rem] mb-6 shadow-md rounded-md">REGISTER</button>
            <p class="text-[18px] font-semibold mt-6 text-center">Already have an account? <a
                    class="underline cursor-pointer" href="/login">Sign In</a></p>
        </form>
        {{-- @endauth --}}
    </div>
</body>

</html>
