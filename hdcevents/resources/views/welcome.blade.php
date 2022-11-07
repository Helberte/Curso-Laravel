@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1 id="title">Meu primeiro projeto laravel</h1>

    <img src="/img/banner.jpg" alt="banner">

    @if(10 > 5)
        <p>A condição é verdadeira</p>
    @endif

    <p>Meu nome é {{ $nome }}</p>

    @if($nome == "Helberte")
        <p>Estamos conversando com o {{ $nome }}</p>
        <p>Ele é {{ $estadoCivil }} mas está namorando e tem {{ $idade }} anos de idade, trabalha como {{ $profissao }}</p>
    @elseif($nome == "fulano")
        <p>Conversando com fulano</p>
    @endif
    
@endsection