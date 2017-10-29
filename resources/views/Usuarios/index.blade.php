
<table>
	<thead>
		<tr>
			<th>Nombre usuario</th>
			<th>Correo electronico</th>
			<th>Fecha nacimiento</th>
			<th>Rol usuario</th>
			<th>Activo</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->fenaci }}</td>
			<td>{{ $user->Rol->titulo }}</td>
			<td>{{ $user->activo }}</td>
		</tr>
	@endforeach
	</tbody>
</table>