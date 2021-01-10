@extends('app')

@section('title', 'About Us | ' .config('app.name'))

@section('content')
<img src="/images/tdn.png" alt="TDN Logo">

<p>Built with &hearts; by Bonn@hin.</p>

<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@stop
