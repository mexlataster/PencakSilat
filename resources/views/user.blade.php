@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container">
@foreach ($users as $user)
  Naam: {{$user->name}}<br>
  Achternaam: {{$user->lastname}}<br>
  Adres: {{$user->adres}}<br>
  Woonplaats: {{$user->woontplaats}}<br>
@endforeach

    </div>
</div>
@endsection