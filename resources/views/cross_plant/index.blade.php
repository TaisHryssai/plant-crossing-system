@extends('layouts.admin.app')

@section('title', 'Plantas Cruzadas')

@section('content')

@component('components.index.header', ['base_search_path' => route('crosPlant.index'),
                                       'new_url' => route('crosPlant.create'),
                                       'new_btn_name' => 'Cruzar Plantas']) @endcomponent

<div class="table-responsive mt-3">
@component('components.index.page_entries_info', ['entries' => $plants]) @endcomponent
<div class="table-responsive mt-8">
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
	<div class="mt-5 float-right flex-wrap">
		{!! $plants !!}
	</div>
</div>
@endsection
