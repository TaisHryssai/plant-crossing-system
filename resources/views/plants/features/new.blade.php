@extends('layouts.admin.app')

@section('title', 'Adicionar Caracteristica à Planta')

@section('content')

<form action="{{route('store.plantFeature', $plant->id)}}" method="POST" novalidate>
	@csrf

	@component('components.form.input_text', ['field'    => 'plant_id',
	'label'    => 'Nome',
	'model'    => 'plant',
	'value'    => $plant->name,
	'disabled' => '',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Caracteristicas',
	'model'    => 'plant',
	'value'    => $plant->feature_id,
	'options'  => $features,
	'default' => 'Selecione caracteristica:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('index.plant')]) @endcomponent
</form>

@endsection
