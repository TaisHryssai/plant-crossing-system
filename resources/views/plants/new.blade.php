@extends('layouts.admin.app')

@section('title', 'Nova Planta')

@section('content')

<form action="{{route('store.plant')}}" method="POST" novalidate>
	@csrf

	@component('components.form.input_text', ['field'    => 'name',
	'label'    => 'Nome',
	'model'    => 'plant',
	'value'    => '',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('index.plant')]) @endcomponent
</form>

@endsection
