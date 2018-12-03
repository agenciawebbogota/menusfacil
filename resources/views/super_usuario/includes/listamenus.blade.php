<table class="centered">
    <thead>
      <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Estado</th>
          <th>Eliminado</th>
          <th>Creado por</th>
          <th>Última actualización</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($menus as $menu)
        <tr>
            <td>{{$menu->nombre}}</td>
            <td>{{$menu->descripcion}}</td>          
            <td>{{$menu->precio}}</td>

            @if ($menu->estado == 1)
                <td>ACTIVO</td>
            @else
                <td>INACTIVO</td>
            @endif 
            @if ($menu->activo == 1)
                <td>NO</td>
            @else
                <td>SI</td>
            @endif 
            <td>{{$menu->user->name}}</td>          
            <td>{{$menu->updated_at}}</td>
            <td>
            <a href="#actualizarMenu" class="btn-floating blue modal-trigger" v-on:click="llenarModal(menu)">
                <i class="material-icons">edit</i>
            </a>
            </td>
            <td>
                <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="material-icons">delete</i></a>
            </td>       
        </tr>    
      @endforeach
    </tbody>
  </table>