<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menús Creados PDF</title>

  <link rel="stylesheet" type="text/css" href="css/pdf.css">

<img src="img/node.png">

</head>
<body>
  <div class="container">
        	<div class="titulo-pdf">
        		<h2>Menus sdfads</h2>
        	</div>
        	<table>
              <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Estado</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($menus as $menu)
                    <tr>
                    	<td>{{ $menu->nombre }} </td>
        	        	<td>{{ $menu->descripcion }}</td>
        	        	<td>{{ $menu->precio }}</td>
        	        	<td>{{ $menu->estado }}</td>
                    </tr>
                @endforeach

              </tbody>
            </table>
  </div>
</body>
</html>
