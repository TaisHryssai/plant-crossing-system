@extends('layouts.admin.app')

@section('title', 'Plantas')

@section('content')

<div class="table-responsive mt-2">
	<div class="col-sm-12 mb-5">
		<a href="{{ route('plants.create') }}" class="btn btn-outline-primary d-block">
			<i class="fas fa-plus"></i>
			Adicionar Planta
		</a>
	</div>

	<table class="table card-table table-striped table-vcenter table-data">
		<thead>
			<tr>
				<th>Nome da Planta</th>
				<th>Caracteristicas</th>
				<th>Criado em</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@each('plants._plant_row', $plantFeature, 'plant')
		</tbody>
	</table>

</div>
@endsection
