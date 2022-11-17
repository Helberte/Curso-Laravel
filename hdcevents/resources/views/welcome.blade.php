@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque o evento</h1>

    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    
    <div id="cards-container" class="row">

    @if(count($events) == 0 && $search)
        <p>Nenhum evento encontrado com {{ $search }}. <a id="ver-todos" href="/">Ver todos</a></p>
    @elseif(count($events) == 0)
        <p id="info-events-home">Não há eventos disponíveis.</p>
    @else
        @foreach($events as $evento)
            <div class="card col-md-3">
                <img src="/img/events/{{ $evento->image }}" alt="{{ $evento->title }}">
                    
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($evento->date)) }}</p>
                    <h5 class="card-title">{{ $evento->title }}</h5>
                    <p class="card-participants">39 Participantes</p>
                    <a href="/events/{{ $evento->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    @endif

    </div>
</div>
  
@endsection