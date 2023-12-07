<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login page</title>
</head>

<body>
    <div class="flex flex-row">
        {{-- Main Background --}}
        <img src="{{ asset('images/AuthBackground.png') }}" class="absolute w-screen h-screen z-0">

        {{-- Authentication Form --}}
        <form class="w-[40rem] h-screen p-12 bg-white z-10 absolute right-0" action="{{ route('login.action') }}"
            method="post">
            <img src={{ asset('/images/BuahTanganSymbol.png') }} class="w-[60rem] object-fill mb-12">
            @csrf
            <h2 class="text-[34px] mb-6 font-semibold text-blackGreen">Login</h2>
            <div class="flex flex-col font-poppins font-medium">
                <label class="text-[18px] text-blackGreen">Email</label>
                <input type="email" name="email"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>
                <label class="text-[18px] text-blackGreen">Password</label>
                <input type="password" name="password"
                    class="bg-lightGreen shadow-md mb-6 h-[3rem] w-[32rem] rounded-md p-2 text-[18px]" required>

                <div class="mb-6">
                    <input type="checkbox" name="rememberMe" class="w-4 h-4 cursor-pointer">
                    <label class="text-[18px]">Remember me</label>
                </div>

            </div>
            <button type="submit"
                class="bg-lightGreen p-3 font-bold text-2xl w-[32rem] mb-6 shadow-md rounded-md">LOGIN</button>
            <a class="text-right w-screen ml-[22rem] cursor-pointer text-gray-500  font-semibold text-[18px]">Forget
                password ?</a>
            <p class="text-[18px] font-semibold mt-24 text-center">Don't have an account yet? <a href="/register"
                    class="underline cursor-pointer">Sign Up</a></p>
        </form>
    </div>
</body>

</html>
