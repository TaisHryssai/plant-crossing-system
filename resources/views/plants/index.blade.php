@extends('layouts.admin.app')

@section('title', 'Plantas')

@section('content')
<h1>Index plantas</h1>

<a href="{{route('create.plant')}}">Criar planta</a>
@endsection
