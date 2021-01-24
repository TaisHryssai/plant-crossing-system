@extends('layouts.admin.app')

@section('title', 'Plantas')

@section('content')

@component('components.index.header', ['base_search_path' => route('plants.index'),
                                       'new_url' => route('plants.create'),
                                       'new_btn_name' => 'Nova Planta']) @endcomponent

<div class="table-responsive mt-3">
@component('components.index.page_entries_info', ['entries' => $plantFeature]) @endcomponent
<div class="table-responsive mt-2">
	<table class="table card-table table-striped table-vcenter table-data">
		<thead>
			<tr>
				<th>Planta</th>
				<th>Nome da Planta</th>
				<th>Criado em</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@each('plants._plant_row', $plantFeature, 'plant')
		</tbody>
	</table>
  <div class="mt-5 float-right flex-wrap">
    {!! $plantFeature !!}
  </div>
</div>
</div>
@endsection
