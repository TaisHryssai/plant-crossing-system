@extends('layouts.admin.app')

@section('title', 'Administrador - ' . $user->name)

@section('content')

<div class="card">
	<div class="card-body">
		<p><strong>Nome: </strong> {{ $user->name }}</p>
		<p><strong>Email: </strong> {{ $user->email }}</p>
		<p><strong>Criado em: </strong> {{ $user->created_at->format('d/m/Y') }}</p>
		<p><strong>Atualizado em: </strong> {{ $user->updated_at->format('d/m/Y') }}</p>
	</div>
</div>

<a class="btn btn-secondary" href="{{route('users.index')}}">Voltar</a>

@endsection
