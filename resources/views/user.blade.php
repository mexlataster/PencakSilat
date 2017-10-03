@extends('layouts.app')

@section('content')


    <div class="main">
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