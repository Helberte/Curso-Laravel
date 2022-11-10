@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque o evento</h1>

    <form action="#">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">

        @foreach($events as $evento)
            <div class="card col-md-3">
                <img src="/img/event_placeholder.jpg" alt="{{ $evento->title }}">

                <div class="card-body">
                    <p class="card-date">10/09/2022</p>
                    <h5 class="card-title">{{ $evento->title }}</h5>
                    <p class="card-participants">39 Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
  
@endsection