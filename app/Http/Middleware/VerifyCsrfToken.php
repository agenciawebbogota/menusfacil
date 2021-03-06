<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // 'menus/crear',
        // 'menus/actualizar/',
        // '/menus/actualizar/estado',
        // 'pedidos/crear',
        // 'pedido/pedidos',
        '/confirmacion/confirmacion'
    ];
}
