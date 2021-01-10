@extends('app')

@section('content')
<img src="/images/casa.png" alt="casablanca Flag">

<h1>Hello from Casablanca!</h1>

<p>It's curently {{ date('h:i A') }}.</p>
@stop
