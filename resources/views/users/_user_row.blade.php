<tr>
	<td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
	<td>{{$user->email}}</td>
	<td>{{$user->created_at->format('d/m/Y')}}</td>
	<td>
		<a href="{{ route('users.edit', $user->id) }}" class="mr-2"><i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar Administrador"></i></a>
		<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="float-right" onSubmit="return confirm('Tem certeza?')">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn-link p-0 ml-1"><i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Deletar Administrador"></i></button>
		</form>

	</td>
</tr>