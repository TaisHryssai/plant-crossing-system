@extends('layouts.admin.app')

@section('title', 'Criar Alelos na caracteristica - '. $features->name)

@section('content')

<form action="{{route('store.allele', $features->id)}}" method="POST" novalidate>
  @csrf

  @component('components.form.input_text', ['field'    => 'feature_id',
  'label'    => 'Caracteristica',
  'model'    => 'feature',
  'value'    => $features->name,
  'disabled' => 'disabled',
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_text', ['field'    => 'value',
  'label'    => 'Valor',
  'model'    => 'allele',
  'value'    => '',
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_text', ['field'    => 'name',
  'label'    => 'Nome',
  'model'    => 'allele',
  'value'    => '',
  'required' => true,
  'errors'   => $errors]) @endcomponent

  @component('components.form.input_submit', ['value' => 'Enviar', 'back_url' => route('home')]) @endcomponent
</form>
@isset($features)
<div class="table-responsive mt-8">

  <table class="table card-table table-striped table-vcenter table-data">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor Alelo</th>
        <th>Nome Alelo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @each('features.alleles._allele_row', $features->alleles, 'alleles')
    </tbody>
  </table>

</div>
@endisset
@endsection
