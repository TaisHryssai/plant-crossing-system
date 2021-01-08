@extends('layouts.admin.app')

@section('title', 'Caracteristicas')

@section('content')

@isset($features)
<div class="table-responsive mt-8">
	<div class="col-sm-12 mb-2">
		<a href="{{ route('create.feature') }}" class="btn btn-outline-primary d-block">
			<i class="fas fa-plus"></i>
			Adicionar Característica
		</a>
	</div>

	<table class="table card-table table-striped table-vcenter table-data">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Criado em</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@each('features._feature_row', $features, 'features')
		</tbody>
	</table>

</div>
@endisset
@endsection
