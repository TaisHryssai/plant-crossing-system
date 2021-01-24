<tr>
	<td><img src="{{ asset('/uploads/plant/'.$plant->image) }}" class="image-plant" style="height: 50px; width: 50px" /></td>

	<td><a href="{{ route('plants.show', $plant->id) }}">{{ $plant->name }}</a></td>
	<td>{{$plant->created_at->format('d/m/Y')}}</td>
	<td>
		<a href="{{route('create.plantFeature', $plant->id)}}" class="mr-2"><i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Adicionar Caraterístca"></i></a>


		<a href="{{ route('plants.edit', $plant->id) }}" class="mr-2"><i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar Planta"></i></a>
		<form action="{{ route('plants.destroy', $plant->id) }}" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn-link p-0 ml-1"><i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Deletar Planta"></i></button>
		</form>

	</td>
</tr>