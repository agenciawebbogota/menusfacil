@extends('partnerts.layouts.app')
@section('contenido')
  <body>
  <div class="row">
    <div class="col l8 offset-l2 center-align flow-text part-title">
      <h2>Conviértete en Socio de Menús Fácil y genera una fuente de ingresos permanente</h2>
        <h3>Obten hasta un 10% del valor que pague cada usuario referido por ti</h3>
        <p>Lo mejor es que te pagamos este valor mientras que el usuario esté activo en nuestro sistema de Menús Fácil</p>
    </div>
  </div>
@include('partnerts.formularios.registro')
  <div class="row beneficios-card">
    <div class="col l12 s12 m12">
      <div class="card-panel teal">
        <span class="center-align head">Principales Beneficios del programa de Partners</span>
        <ul class="part-list">
          <li><i class="material-icons">done</i> Obtienes un ingreso pasivo recurrente todos los meses</li>
          <li><i class="material-icons">done</i> Pagos periódicos mensuales o quincenales</li>
          <li><i class="material-icons">done</i> Abono directamente a tu cuenta bancaria</li>
          <li><i class="material-icons">done</i> Recibes tu comisión mientras tu referido esté activo en el sistema</li>
          <li><i class="material-icons">done</i> Materiales de marketing y herramientas gratuitas</li>
          <li><i class="material-icons">done</i> Estadísticas de tus cuentas referidas e ingresos generados</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="part-footxt">
    <span>Ingresa tus datos ahora y comienza a ganar dinero recomendando</span>
  </div>
  <div class="col l8 offset-l2 center-align" style="margin:-30px 0 30px 0">
    <img src="{{url('admin/img/logo-2-menusfacil.svg')}}" alt="Menus Facil Logo" width="300px">
  </div>
</body>
@endsection
