@extends('app')

@section('title', 'About Us | ' .config('app.name'))

@section('content')
<img src="{{ asset('images/tdn.png') }}" alt="TDN Logo" class="my-12 rounded-full shadow-md">

<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by Bonn@hin.
</h2>

<p class="">
    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
</p>
@stop
