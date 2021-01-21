@extends('layouts.admin.app')

@section('title', 'Caracteristica')
@section('content')

<div class="card">
  <div class="card-body">
    <p><strong>Nome Caracteristica: </strong> {{ $feature->name }}</p>
    <p><strong>Alelos da Caracteristica: </strong> </p>
    @foreach($feature->alleles as $allele)
    <p>{{ $allele->value }} - {{$allele->name}}</p>
    @endforeach
  </div>
</div>

<a href="{{route('features.index')}}"> Voltar</a>

@endsection
