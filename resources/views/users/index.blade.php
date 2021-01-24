@extends('layouts.admin.app')

@section('title', 'Administradores')

@section('content')

@component('components.index.header', ['base_search_path' => route('users.index'),
										'new_url' => route('users.create'),
										'new_btn_name' => 'Novo Administrador']) @endcomponent

<div class="table-responsive mt-3">
	@component('components.index.page_entries_info', ['entries' => $users]) @endcomponent
	<div class="table-responsive mt-8">
		<table class="table card-table table-striped table-vcenter table-data">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Criado em</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@each('users._user_row', $users, 'user')
			</tbody>
		</table>
		<div class="mt-5 float-right flex-wrap">
			{!! $users !!}
		</div>
	</div>
</div>
@endsection
