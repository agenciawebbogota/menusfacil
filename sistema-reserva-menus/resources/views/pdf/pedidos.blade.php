<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pedidos de hoy</title>
  <link rel="stylesheet" type="text/css" href="css/pdf.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="logo-pdf">
      <img src="img/logo.png">
      <h2 class="titulo-menus-solicitados">Pedidos de Hoy</h2>
    </div>
    <table class="datos-seleccion-usuarios">
      <thead>
        <tr>
          <th>Nombre Usuario</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Correo electrónico</th>
          <th>Menú Seleccionado</th>
          <th>Oservaciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($menus as $menu)
            <tr>
              <td>{{$menu->nombre}}</td>
              <td>{{$menu->direccion}}</td>
              <td>{{$menu->telefono}}</td>
              <td>{{$menu->correo}}</td>
              <td>{{$menu->nombre_menu}}</td>
              <td>{{$menu->observaciones}}</td>
            </tr>
        @endforeach

        @foreach ($adicionales as $adicional)
            <tr>
              <td>{{$adicional->nombre}}</td>
              <td>{{$adicional->direccion}}</td>
              <td>{{$adicional->telefono}}</td>
              <td>{{$adicional->correo}}</td>
              <td>{{$adicional->nombre_adicional}}</td>
              <td>{{$adicional->observaciones}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</body>

</html>
