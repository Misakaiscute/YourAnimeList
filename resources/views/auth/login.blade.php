@extends('html_necessities')
@section('content')
    <form method="post" action="{{route('login')}}">
        @csrf
        @method('post')
        <div class="m-auto w-2/5">
            <div class="border border-gray-300 shadow-xl shadow-emerald-600 rounded-xl m-auto w-4/5 p-6 mt-6">
                <p class="text-center font-sans text-2xl text-gray-300 font-bold mb-6">Log in</p>
                <div class="m-auto w-full">
                    @foreach($errors as $error)
                        <p class="text-center font-sans text-sm text-gray-300">{{$error[0]}}</p>
                    @endforeach
                </div>
                <div class="grid grid-rows-2 place-items-start auto-cols-auto">
                    <div class="m-auto mt-2 inline-grid w-full">
                        <label for="email" class="row-span-1 font-sans text-xs text-gray-300 font-bold">Email: </label>
                        <input type="email" id="email" name="email" size="32vh" class="border border-gray-300 p-1 rounded-[4px] bg-gray-800 text-gray-300 focus:outline-none focus:border-emerald-200 focus:text-gray-300 focus:shadow focus:shadow-emerald-600">
                    </div>
                    <div class="m-auto mt-2 inline-grid w-full">
                        <label for="password" class="row-span-1 font-sans text-xs text-gray-300 font-bold">Password: </label>
                        <div class="inline-flex w-full">
                            <input type="password" id="password" name="password" class="border border-gray-300 p-1 rounded-[4px] bg-gray-800 text-gray-300 focus:outline-none focus:border-emerald-200 focus:text-gray-300 w-full focus:shadow focus:shadow-emerald-600">
                            <button type="button" id="password-btn" class="size-9 text-gray-300"><i class="fa solid fa-eye text-gray-300 text-xl"></i></button>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="remember-me" class="row-span-1 font-sans text-xs text-gray-300 font-bold">Remember me</label>
                        <input type="checkbox" name="remember-me" id="remember-me" class="relative top-0.5">
                    </div>
                    <input type="submit" value="Log in" class="m-auto mt-4 px-20 py-3 rounded-[4px] bg-emerald-800 text-gray-300 cursor-pointer hover:shadow-md hover:shadow-emerald-600">
                    <p class="text-sm text-gray-300 decoration-0 m-auto mt-3 hover:text-fuchsia-300"><a href="{{route('register', ['errors' => []])}}">Don't have an account? Register.</a></p>
                </div>
            </div>
        </div>
    </form>
@endsection
