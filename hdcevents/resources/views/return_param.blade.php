@extends('layouts.main')

@section('title', 'Passagem de query parameters')

@section('content')

@if ($busca != '' || $sobrenome != '')

  <h1>Minha busca é: {{ $busca }} {{ $sobrenome }}</h1>

@else

  <h1>Nada a ser buscado</h1>

@endif

@endsection