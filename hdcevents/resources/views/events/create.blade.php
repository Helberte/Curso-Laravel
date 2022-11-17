@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>

  <form action="/events" class="form-create-event"  method="POST" enctype="multipart/form-data">
  @csrf  
    <div class="form-group">
      <label for="image">Imagem do evento:</label>
      <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
    </div>
    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="city">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade" required>
    </div>
    <div class="form-group">
      <label for="private">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required></textarea>
    </div>
    
    <div id="list-infra" class="form-group">
      <label>Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras" id="cad"> 
        <label for="cad">Cadeiras</label> 
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco" id="palco">
        <label for="palco">Palco</label> 
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja grátis" id="cerveja"> 
        <label for="cerveja">Cerveja grátis</label> 
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food" id="open"> 
        <label for="open">Open Food</label> 
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes" id="brinde"> 
        <label for="brinde">Brindes</label> 
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Nenhum" id="nenhum"> 
        <label for="nenhum">Nenhum</label> 
      </div>
    </div>


    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection