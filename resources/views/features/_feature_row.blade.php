<tr>
	<td><a href="{{route('show.feature', $features->id)}}">{{ $features->name }}</a></td>
	<td>{{$features->created_at->format('d/m/Y')}}</td>
	<td>
		<a href="{{route('edit.feature', $features->id)}}" class="mr-2"><i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar Caraterístca"></i></a>
		<form action="{{route('delete.feature', $features->id)}}" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn-link p-0 ml-1"><i class="far fa-trash-alt"></i></button>
		</form>
	</td>
</tr>