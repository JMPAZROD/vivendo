@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-5xl text-center pt-24">Bienvenid@ a Vivendo</h1>
    <br>
    <p class="text-1xl text-center"><a href="{{ route('interested') }}">Ir a listado de interesados</a></p>
@endsection
