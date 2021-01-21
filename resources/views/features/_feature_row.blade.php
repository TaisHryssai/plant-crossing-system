<tr>
	<td><a href="{{route('features.show', $features->id)}}">{{ $features->name }}</a></td>
	<td>{{$features->created_at->format('d/m/Y')}}</td>
	<td>
		<a href="{{route('features.edit', $features->id)}}" class="mr-2"><i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar Caraterístca"></i></a>
		<form action="{{route('features.destroy', $features->id)}}" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn-link p-0 ml-1"><i class="far fa-trash-alt"></i></button>
		</form>
	</td>
</tr>