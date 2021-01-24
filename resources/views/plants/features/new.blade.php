@extends('layouts.admin.app')

@section('title', 'Adicionar Caracteristica à Planta')

@section('content')

<form action="{{route('store.plantFeature', $plant->id)}}" method="POST" novalidate>
	@csrf

	@component('components.form.input_text', ['field'    => 'plant_id',
	'label'    => 'Nome',
	'model'    => 'plantFeature',
	'value'    => $plant->name,
	'disabled' => 'disabled',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_select',['field' => 'feature_id',
	'label'    => 'Caracteristicas',
	'model'    => 'plantFeature',
	'value'    => $plantFeature->feature_id,
	'options'  => $features,
	'default' => 'Selecione caracteristica:',
	'value_method' => 'id',
	'label_method' => 'name',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	<select class="form-control custom-select required"
	required="required"
	autofocus="autofocus" name="name"
	id="" >
	<option value=''> {{'Selecione um alelo'}} </option>

	@foreach($features as $option)
	@foreach($option->alleles as $allele)
	<option value="{{ $allele->name }}"
		{{ $allele->name ? 'selected' : '' }} >
		{{ $allele->name}}
	</option>
	@endforeach
	@endforeach
</select>

@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('plants.index')]) @endcomponent
</form>

@endsection
