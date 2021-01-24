@extends('layouts.admin.app')

@section('title', 'Editar Planta')

@section('content')

<form action="{{route('plants.update', $plant->id)}}" method="POST" novalidate enctype="multipart/form-data">
	@csrf
	@method('patch')

	@component('components.form.input_text', ['field' => 'plant_id',
	'label'    => 'Nome',
	'model'    => 'plantFeature',
	'value'    => $plant->name,
	'required' => true,
	'errors'   => $errors]) @endcomponent

	<div class="col-sm-4">
		@component('components.form.input_image',['field' => 'plant_id',
		'label'      => 'Adicione uma foto à planta',
		'image_path' => $plant->image_path,
		'model'      => 'plantFeature']) @endcomponent
	</div>

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Caracteristicas',
	'model'    => 'plantFeature',
	'value'    => $plant->feature_id,
	'options'  => $features,
	'multiple' => 'multiple',
	'default' => 'Selecione caracteristica:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent
	
	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('plants.index')]) @endcomponent
</form>

@endsection
