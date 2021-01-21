@extends('layouts.admin.app')

@section('title', 'Cruzar nova planta')

@section('content')

<form action="{{ route('crosPlant.store') }}" method="POST" novalidate>
	@csrf

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Cruzar planta',
	'model'    => 'crossPlant',
	'value'    => '',
	'options'  => $plants,
	'default' => 'Selecione uma planta:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Cruzar planta',
	'model'    => 'crossPlant',
	'value'    => '',
	'options'  => $plants,
	'default' => 'Selecione uma planta:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('plants.index')]) @endcomponent
</form>

@endsection
