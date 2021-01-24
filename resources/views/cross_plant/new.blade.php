@extends('layouts.admin.app')

@section('title', 'Cruzar nova planta')

@section('content')

<form action="" method="POST" novalidate>
	@csrf

	@component('components.form.input_select',['field' => 'plant_id',
	'label'    => 'Cruzar planta',
	'model'    => 'crossPlant',
	'value'    => $crossPlant->plant_id,
	'options'  => $plants,
	'default' => 'Selecione uma planta:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'plant_id',
	'label'    => 'Cruzar planta',
	'model'    => 'crossPlant',
	'value'    => $crossPlant->plant_id,
	'options'  => $plants,
	'default' => 'Selecione uma planta:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('crosPlant.index')]) @endcomponent
</form>

@endsection
