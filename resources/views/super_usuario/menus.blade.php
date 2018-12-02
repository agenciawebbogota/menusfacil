@extends('super_usuario.layouts.admin')
@section('contenido')

@include('super_usuario.includes.listamenus')

{{ dd($menus) }}


@endsection