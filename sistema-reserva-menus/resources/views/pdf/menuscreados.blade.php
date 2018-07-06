<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menus creados</title>
</head>
<body>
	<table class="striped highlight centered">
      <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($menus as $menu)
            <tr>
            	<td>{{ $menu->nombre }} </td>
	        	<td>{{ $menu->descripcion }}</td>
	        	<td>{{ $menu->precio }}</td>
	        	{{-- <td>{{ $menu->estado }}</td> --}}
            </tr>
        @endforeach

      </tbody>
    </table>	
</body>
</html>