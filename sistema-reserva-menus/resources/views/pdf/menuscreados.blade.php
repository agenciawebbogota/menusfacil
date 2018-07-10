<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menús Creados PDF</title>
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">

<style media="screen">
	body{
		background-color: #2a2730;
		width:827px;
		height: 1436px;
		display: inline-block;
	}
	.titulo h2{
		color: #e88a10;
	}
</style>

</head>
<body>
	<div class="titulo">
		<h2>Menus</h2>
	</div>
	<table class="striped highlight centered" style="color:#ffffff">
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
