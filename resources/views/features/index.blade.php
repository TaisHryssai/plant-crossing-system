@extends('layouts.admin.app')

@section('title', 'Caracteristicas')

@section('content')

@component('components.index.header', ['base_search_path' => route('features.index'),
										'new_url' => route('features.create'),
										'new_btn_name' => 'Nova Caracteristica']) @endcomponent

<div class="table-responsive mt-3">
	@component('components.index.page_entries_info', ['entries' => $features]) @endcomponent
	@isset($features)
	<div class="table-responsive mt-8">
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
		<div class="mt-5 float-right flex-wrap">
			{!! $features !!}
		</div>
	</div>
</div>
@endisset
@endsection
