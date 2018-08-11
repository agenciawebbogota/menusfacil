
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="admin/img/favicon.png" sizes="32x32">
  <title>Historico de ménus PDF</title>
  <link rel="stylesheet" type="text/css" href="pdf/css/pdf-menus.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
@if (!count($menus)<1)
  <div class="container">
    <div class="logo-pdf">
      <img src="img/logo2.png" alt="">
    </div>
    <div class="titulo-pdf">
    	<h2 style="color:#2a2730">Historico de Menús</h2>
    </div>
    <table class="datos-menus-creados" style="border: 2px solid #66181a;background-color: #ffffff">
      <thead style="background: #2a2730;border-bottom: 2px solid #66181a;color: #ffffff;">
        <tr>
          <th>Nombre del Menú</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Adicional</th>
          <th>Estado</th>
          <th>Eliminado</th>
        </tr>
      </thead>
      <tbody style="color: #2a2730">
        @foreach ($menus as $menu)
            <tr>
              <td>{{$menu->nombre}}</td>
              <td>{{$menu->descripcion}}</td>
              <td>$ {{ number_format($menu->precio)}}</td>
              <td>{{$menu->adicional}}</td>
              @if ($menu->estado == 1)
                 <td>Activo</td>
              @else
                 <td>Inactivo</td>
              @endif
              @if ($menu->activo == 1)
                 <td>NO</td>
              @else
                 <td>SI</td>
              @endif
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@else
  <div class="no-menus">
    <img src="img/logo-menusfacil.png" alt="">
    <h1>No hay menús para mostrar</h1>
  </div>
  <img class="ft-img" src="img/footer-image.png" alt="">
@endif
</body>
</html>
