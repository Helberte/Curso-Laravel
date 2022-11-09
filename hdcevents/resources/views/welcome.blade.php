@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $evento)

<p>Título: {{ $evento->title }}, Descrição: {{ $evento->description }}, Cidade: {{ $evento->city }}, Aberto ao público: 
    @if($evento->private == 1)
        Não
    @else
        Sim
    @endif

</p>

@endforeach
              
@endsection