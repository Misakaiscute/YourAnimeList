@extends('html_necessities')
@section('content')
<form method="post" action="{{route('register')}}">
    @csrf
    @method('post')
<div class="m-auto w-2/5">
    <div class="border border-gray-300 shadow-xl shadow-emerald-600 rounded-xl m-auto w-4/5 p-6 mt-6">
        <p class="text-center font-sans text-2xl text-gray-300 font-bold mb-6">Create an account</p>
        <div class="m-auto w-full">
        @foreach($errors as $error)
            <p class="text-center font-sans text-sm text-gray-300">{{$error[0]}}</p>
        @endforeach
        </div>
        <div class="grid grid-rows-4 place-items-start grid-template-rows: repeat(1, minmax(0, 1fr))">
            <div class="m-auto mt-2 flex w-full">
                <div class="inline-grid w-1/2">
                    <label for="first-name" class="font-sans text-xs text-gray-300 font-bold">First name: </label>
                    <input type="text" id="first-name" name="first-name" size="10vh" class="row-span-1 border border-gray-300 p-1 rounded-[4px] bg-gray-800 text-gray-300 focus:outline-none focus:border-emerald-200 focus:text-gray-300 focus:shadow focus:shadow-emerald-600">
                </div>
                <div class="ml-5 inline-grid w-1/2">
                    <label for="last-name" class="row-span-1 font-sans text-xs text-gray-300 font-bold">Last name: </label>
                    <input type="text" id="last-name" name="last-name" size="10vh" class="row-span-1 border border-gray-300 p-1 rounded-[4px] bg-gray-800 text-gray-300 focus:outline-none focus:border-emerald-200 focus:text-gray-300 focus:shadow focus:shadow-emerald-600">
                </div>
            </div>
            <div class="m-auto mt-2 inline-grid w-full">
                <label for="username" class="row-span-1 font-sans text-xs text-gray-300 font-bold">Username: </label>
                <input type="text" id="username" name="username" size="32vh" class="border border-gray-300 p-1 rounded-[4px] bg-gray-800 text-gray-300 focus:outline-none focus:border-emerald-200 focus:text-gray-300 focus:shadow focus:shadow-emerald-600">
            </div>
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
            <input type="submit" value="Register" class="m-auto mt-4 px-20 py-3 rounded-[4px] bg-emerald-800 text-gray-300 cursor-pointer hover:shadow-md hover:shadow-emerald-600">
            <p class="text-sm text-gray-300 decoration-0 m-auto mt-3 hover:text-fuchsia-300"><a href="{{route('login', ['errors' => []])}}">Have an account? Log in.</a></p>
        </div>
    </div>
</div>
</form>
@endsection
