<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
  <title>Pedidos de hoy</title>
  <link rel="stylesheet" type="text/css" href="pdf/css/pdf.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="logo-pdf">
      <img src="img/logo2.png">
      <h2 class="pedidos-hoy" style="color:#2a2730">Pedidos de Hoy</h2>
    </div>
    <table class="datos-seleccion-usuarios" style="border: 2px solid #66181a;background-color: #ffffff;">
      <thead style="background: #2a2730;border-bottom: 2px solid #66181a;">
        <tr style="border-left: 2px solid #66181a">
          <th>Nombre Usuario</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Correo electrónico</th>
          <th>Menú Seleccionado</th>
          <th>Oservaciones</th>
        </tr>
      </thead>
      <tbody style="color: #2a2730">
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
