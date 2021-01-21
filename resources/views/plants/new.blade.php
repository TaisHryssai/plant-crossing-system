@extends('layouts.admin.app')

@section('title', 'Nova Planta')

@section('content')

<form action="{{route('plants.store')}}" method="POST" novalidate enctype="multipart/form-data">
	@csrf

	@component('components.form.input_text', ['field'    => 'name',
	'label'    => 'Nome',
	'model'    => 'plant',
	'value'    => '',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	<div class="col-sm-4">
		@component('components.form.input_image',['field' => 'image',
		'label'      => 'Adicione uma foto à planta',
		'image_path' => $plant->image,
		'model'      => 'plant']) @endcomponent
	</div>

	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('plants.index')]) @endcomponent
</form>

@endsection
