@extends('layouts.admin.app')

@section('title', 'Criar Caracteristicas')

@section('content')

<form action="{{route('update.feature', $allele->feature->id)}}" method="POST" novalidate>
  @csrf
  @method('patch')

  @component('components.form.input_text', ['field'    => 'feature_id',
  'label'    => 'Nome Caracteristica',
  'model'    => 'allele',
  'value'    => $allele->feature->name,
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_text', ['field'    => 'value',
  'label'    => 'Valor',
  'model'    => 'allele',
  'value'    => $allele->value,
  'required' => true,
  'errors'   => $errors]) @endcomponent

    @component('components.form.input_text', ['field'    => 'name',
  'label'    => 'Nome',
  'model'    => 'allele',
  'value'    => $allele->name,
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('index.feature')]) @endcomponent
</form>

@endsection
