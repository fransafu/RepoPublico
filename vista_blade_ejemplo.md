# Este es un compilado de codigo que se puede utilizar en las vistas de laravel (.blade.php)

## Como generar una lista

Para generar una lista se debe realizar un foreach sobre un objeto y luego utilizar los atributos del objeto para su publicacion, en este caso estoy iterando un conjunto de datos "$arregloDatos" y por cada dato encontrado se asigna a una variable "$dato", el dato encontrado tiene dentro de su estructura el atributo "titulo".

```php
<ul>
    @foreach ($arregloDatos as $dato)
        <li>{{ $dato->titulo }}</li>
    @endforeach
</ul>
```

## Llenar una tabla de datos

```php
<table>
	<thead>
		<tr>
			<th>Numero cliente</th>
			<th>Nombre Cliente</th>
			<th>Rut</th>
			<th>Telefono</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
	@foreach($clientes as $cliente)
		<tr>
			<td>{{$cliente->id}}</td>
			<td>{{$cliente->nombre}}</td>
			<td>{{$cliente->rut}}</td>
			<td>{{$cliente->telefono}}</td>
			<td>{{$cliente->email}}</td>
		</tr>
	@endforeach
	</tbody>
</table>
```

## Llenar un selector de datos

```php
<select>
	@foreach($modeloVehiculos as $modeloVehiculo)
		<option value="{{$modeloVehiculo->codigo}}">{{$modeloVehiculo->titulo}}</option>
	@endforeach
</select>
```