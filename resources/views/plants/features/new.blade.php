@extends('layouts.admin.app')

@section('title', 'Adicionar Caracteristica à Planta')

@section('content')

<form action="{{route('store.plantFeature', $plant->id)}}" method="POST" novalidate>
	@csrf

	@component('components.form.input_text', ['field'    => 'feature_id',
	'label'    => 'Nome',
	'model'    => 'plantFeature',
	'value'    => $plant->name,
	'disabled' => 'disabled',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Caracteristicas',
	'model'    => 'plantFeature',
	'value'    => $plant->feature_id,
	'options'  => $features,
	'default' => 'Selecione caracteristica:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Caracteristicas',
	'model'    => 'plantFeature',
	'value'    => '',
	'options'  => $alleles,
	'default' => 'Selecione Alelos:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent


	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('plants.index')]) @endcomponent
</form>

@endsection
