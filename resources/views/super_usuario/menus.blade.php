@extends('super_usuario.layouts.admin')
@section('contenido')

    @include('super_usuario.includes.listamenus')

@endsection



@section('script')
<script src="{{ url('super_usuario/js/materialize.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			let actualizarUser = M.Modal.init(document.querySelectorAll('#actualizarUser'), {dismissible:false});
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
			let sidenav = M.Sidenav.init(document.querySelectorAll('.sidenav'), {});
		})
    </script>
@endsection