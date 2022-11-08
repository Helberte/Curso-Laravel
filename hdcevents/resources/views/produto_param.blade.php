@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

@if ($id != null)
  <h1>Produto código: {{ $id }}</h1>
@endif

@endsection