<tr>
	<td><a href="{{ route('plants.show', $plant->id) }}">{{ $plant->name }}</a></td>
	@foreach($plant->features as $feature)
	<td>{{$feature->name}}</td>
	@endforeach
	<td>{{$plant->created_at->format('d/m/Y')}}</td>
	<td>
		<a href="{{ route('plants.edit', $plant->id) }}" class="mr-2"><i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar Caraterístca"></i></a>
		<form action="" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn-link p-0 ml-1"><i class="far fa-trash-alt"></i></button>
		</form>

	</td>
</tr>