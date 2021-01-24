@extends('layouts.admin.app')

@section('title', 'Planta - ' . $plant->name)
@section('content')

<div class="card">
	<div class="card-body">
		<p><strong>Planta: </strong> {{ $plant->name }}</p>
		<img src="{{ asset('/uploads/plant/'.$plant->image) }}" class="image-plant" style="height: 50px; width: 50px" />

		@foreach($plant->features as $allele)
		<p><strong>Caracteristicas: </strong> </p>
		<p>{{$allele->name}}</p>

		
		@endforeach

	</div>
</div>

<a href="{{route('plants.index')}}"> Voltar</a>

@endsection
