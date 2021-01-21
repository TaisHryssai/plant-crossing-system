@extends('layouts.admin.app')

@section('title', 'Planta - ' . $plant->name)
@section('content')

<div class="card">
  <div class="card-body">
    <p><strong>Planta: </strong> {{ $plant->name }}</p>
    <p><strong>Caracteristicas: </strong> </p>
    @foreach($plant->features as $allele)
    <p>{{$allele->name}}</p>
    @endforeach
  </div>
</div>

<a href="{{route('plants.index')}}"> Voltar</a>

@endsection
