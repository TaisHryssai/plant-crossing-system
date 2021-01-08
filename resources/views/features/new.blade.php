@extends('layouts.admin.app')

@section('title', 'Criar Caracteristicas')

@section('content')

<form action="{{route('store.feature')}}" method="POST" novalidate>
  @csrf

  @component('components.form.input_text', ['field'    => 'name',
  'label'    => 'Nome',
  'model'    => 'feature',
  'value'    => '',
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('index.feature')]) @endcomponent
</form>

@endsection
