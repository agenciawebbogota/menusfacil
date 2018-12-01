<?php

namespace App\Exports;
use App\Pedido;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PedidoExport implements FromCollection, ShouldAutoSize, ToModel, WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  \DB::table('pedidos')
					->where('pedidos.user_id', \Auth::id())
					->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
					->whereDate('pedidos.created_at', '=', Carbon::now()->format('Y-m-d'))
					->select('pedidos.id', 'pedidos.nombre', 'pedidos.correo','pedidos.direccion','menus.nombre as nombre_menu', 'menus.descripcion', 'menus.precio')
					->orderBy('id', 'ASC')
					->get();
    }
    public function model(array $row)
    {
        return new Pedido([
            'nombre'  => $row['id'],
            'nombre'    => $row['nombre'],
            'correo' => $row['correo'],
            'direccion' => $row['direccion'],
            'nombre_menu' => $row['nombre_menu'],
            'descripcion' => $row['descripcion'],
            'precio' => $row['precio'],
        ]);
    }
}

// correo: null
// created_at: "2018-12-01 16:22:55"
// descripcion: "Más que un platano."
// direccion: "KR 90 # 6A - 98"
// id: 1
// menu_pedido: 1
// nombre: "Luis Raga"
// nombre_pedido: "Platanos con queso"
// observaciones: null
// precio: "2000"
// telefono: "3043788629"
// updated_at: "2018-12-01 16:22:55"
// user_id: 1

// id
// creted_at
// update_at
// nombre
// telefono
// correo
// direccion
// observaciones
// menu_pedido
// user_id