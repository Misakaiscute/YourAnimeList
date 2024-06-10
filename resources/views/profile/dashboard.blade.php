@section('content')
    {{dd($user);}}
<div class="w-full text-gray-300 text-4xl">
    <p class="text-center">Hiiii {{$user->firstname}} {{$user->lastname}}</p>
</div>
@endsection
@extends('html_necessities')
