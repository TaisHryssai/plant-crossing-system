@extends('layouts.admin.app')

@section('title', 'Editar Administrador - ' . $user->name)

@section('content')

<form action="{{route('users.update', $user->id)}}" method="POST" novalidate autocomplete="off">
	@csrf
	@method('patch')

	@component('components.form.input_text', ['field'    => 'name',
	'label'    => 'Nome',
	'model'    => 'user',
	'value'    => $user->name,
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_email', ['field'    => 'email',
	'label'    => 'Email',
	'model'    => 'user',
	'value'    => $user->email,
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_password', ['field'    => 'password',
	'label'    => 'Senha',
	'model'    => 'user',
	'required' => true,
	'errors'   => $errors]) @endcomponent

	@component('components.form.input_submit', ['value' => 'Criar', 'back_url' => route('users.index')]) @endcomponent
</form>


@endsection
