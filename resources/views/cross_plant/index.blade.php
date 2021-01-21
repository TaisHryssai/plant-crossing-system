@extends('layouts.admin.app')

@section('title', 'Plantas Cruzadas')

@section('content')

<div class="table-responsive mt-8">
	<div class="col-sm-12 mb-2">
	</div>	<div class="col-sm-12 mb-2">
		<a href="{{ route('crosPlant.create') }}" class="btn btn-outline-primary d-block">
			<i class="fas fa-plus"></i>
			Cruzar Planta
		</a>
	</div>

	<table class="table card-table table-striped table-vcenter table-data">
		<thead>
			<tr>
				<th>Nome da Planta</th>
				<th>Caracteristica</th>
				<th>Criado em</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

</div>
@endsection
