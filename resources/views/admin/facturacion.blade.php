
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar Cuenta || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="IKjGR54bAHYIfZadImuhOCJF7QhLZSqXWqQGKd21">
  <link href="http://127.0.0.1:8000/partnerts/css/app.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('partnerts/css/custom.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{url('admin/css/facturacion.css')}}">
  <link href="{{url('assets/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
  <link href="{{url('style.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/skins/creative.css')}}" rel="stylesheet">
  <link rel="icon" href="{{url('admin/img/favicon.png')}}" sizes="32x32">
</head>
<body>
  <div>
    <div class="bgbar">
      <nav>
        <a class="brand-logo center">
          <img src="{{url('admin/img/logo-menusfacil.svg')}}" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
      </nav>
    </div>
    <section class="ptb-30 gray-bg">
        <div class="container">
          <div class="text-center mb-80 wow fadeInUp">
              <h2 class="section-title text-uppercase text-extrabold">Actualiza tu cuenta</h2>
              <h3 class="section-sub">Actualiza ahora tu cuenta de {{Auth::user()->name}} y ahorra el 20% de tu suscripción mensual</h3>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="table-contents text-center">
                        <div class="table-header brand-hover pbasic">
                            <div class="package-name">
                                <span class="white-text">Básico</span>
                                <p class="prdesc">Para pequeños establecimientos</p>
                                <div class="precio">
                                  <span class="delrprice"><del>$170.000</del></span><br>
                                  <span class="price">$136.000/mes</span>
                                </div>
                            </div>
                        </div>

                        <div class="table-info">
                            <ul>
                                <li>Hasta 30 órdenes por día</li>
                                <li>Colores y logotipo del negocio</li>
                                <li>URL y código QR personalizados</li>
                                <li class="refil"><br><br><br><br><br></li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <div class="purchase-button">
                                <form novalidate class="md-layout" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
                                    <input name="merchantId"    type="hidden"  value="{{$merchanId}}">
                                    <input name="accountId"     type="hidden"  value="{{$accoundId}}">
                                    <input name="description"   type="hidden"  value="{{$descripcion}}">
                                    <input name="referenceCode" type="hidden"  value="{{$PLAN1['referencia']}}" >
                                    <input name="amount"        type="hidden"  value="{{$PLAN1['valor']}}"   >
                                    <input name="tax"           type="hidden"  value="0"  >
                                    <input name="taxReturnBase" type="hidden"  value="0" >
                                    <input name="currency"      type="hidden"  value="{{$PLAN1['moneda']}}" >
                                    <input name="signature"     type="hidden"  value="{{$PLAN1['signature']}}">
                                    <input type="hidden" name="extra1" value="{{Auth::user()->id}}">
                                    <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                                    <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/respuesta')}}" >
                                    <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/confirmacion')}}" >
                                    <button class="btn btncta" type="submit" href="#">Elegir este plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="table-contents text-center">
                        <div class="table-header brand-hover pmedium">
                            <div class="package-name">
                              <span class="white-text">Profesional</span>
                              <p class="prdesc">Para negocios en crecimiento</p>
                              <div class="precio">
                                <span class="delrprice"><del>$359.000</del></span><br>
                                <span class="price">$287.000/mes</span>
                              </div>
                            </div>
                        </div>
                        <div class="table-info">
                            <ul>
                                <li>Hasta 50 órdenes por día</li>
                                <li>Colores y logotipo del negocio</li>
                                <li>URL y código QR personalizados</li>
                                <li>Subir imágenes de platos</li>
                                <li>Agregar tiempo de espera de orden</li>
                                <li>Escoger punto de venta o domicilios</li>
                                <li>Check órdenes despachadas</li>
                                <br><br>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <div class="purchase-button">
                                <form novalidate class="md-layout" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
                                    <input name="merchantId"    type="hidden"  value="{{$merchanId}}">
                                    <input name="accountId"     type="hidden"  value="{{$accoundId}}">
                                    <input name="description"   type="hidden"  value="{{$descripcion}}">
                                    <input name="referenceCode" type="hidden"  value="{{$PLAN2['referencia']}}" >
                                    <input name="amount"        type="hidden"  value="{{$PLAN2['valor']}}"   >
                                    <input name="tax"           type="hidden"  value="0"  >
                                    <input name="taxReturnBase" type="hidden"  value="0" >
                                    <input name="currency"      type="hidden"  value="{{$PLAN2['moneda']}}" >
                                    <input name="signature"     type="hidden"  value="{{$PLAN2['signature']}}">
                                    <input type="hidden" name="extra1" value="{{Auth::user()->id}}">
                                    <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                                    <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/respuesta')}}" >
                                    <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/confirmacion')}}" >
                                    <button class="btn btncta" type="submit" href="#">Elegir este plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="table-contents text-center">
                        <div class="table-header brand-hover pfull" style="background-color:#e88a10">
                            <div class="package-name">
                              <span class="white-text">Empresarial</span>
                              <p class="prdesc">Para grandes hoteles y restaurantes</p>
                              <div class="precio">
                                <span class="delrprice"><del>$699.000</del></span><br>
                                <span class="price">$559.000/mes</span>
                              </div>
                            </div>
                        </div>
                        <div class="table-info">
                            <ul>
                                <li>Hasta 200 órdenes por día</li>
                                <li>Colores y logotipo del negocio</li>
                                <li>URL y código QR personalizados</li>
                                <li>Subir imágenes de platos</li>
                                <li>Horario apertura y cierre de órdenes</li>
                                <li>Limitar número de platos</li>
                                <li>Escoger punto de venta o domicilio</li>
                                <li>Check para órdenes despachadas</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <div class="purchase-button">
                                <form novalidate class="md-layout" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
                                    <input name="merchantId"    type="hidden"  value="{{$merchanId}}">
                                    <input name="accountId"     type="hidden"  value="{{$accoundId}}">
                                    <input name="description"   type="hidden"  value="{{$descripcion}}">
                                    <input name="referenceCode" type="hidden"  value="{{$PLAN3['referencia']}}" >
                                    <input name="amount"        type="hidden"  value="{{$PLAN3['valor']}}"   >
                                    <input name="tax"           type="hidden"  value="0"  >
                                    <input name="taxReturnBase" type="hidden"  value="0" >
                                    <input name="currency"      type="hidden"  value="{{$PLAN3['moneda']}}" >
                                    <input name="signature"     type="hidden"  value="{{$PLAN3['signature']}}">
                                    <input type="hidden" name="extra1" value="{{Auth::user()->id}}">
                                    <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                                    <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/respuesta')}}" >
                                    <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/confirmacion')}}" >
                                    <button class="btn btncta" type="submit" href="#">Elegir este plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row padding-top-50">
            <h3 class="text-medpago">Paga fácil y rápido con tu medio de pago favorito<br><br><span>Tu cuenta se actualizará una vez confirmado el pago</span></h3>
            <div class="col m6 offset-m3 s8 offset-s2 l4 offset-l4">
              <img src="../assets/img/como-pagar-menusfacil.png" alt="medios de pago menus facil" style="margin-top:30px" class="img-responsive">
            </div>
          </div>
          <div class="ptb-30 text-center wow fadeInUp">
              <a href="#">Cancelar y volver a la página principal</a>
          </div>
          </div>
        </div>
    </section>
    <!-- Botones flotantes con opciones -->
  <footer class="page-footer" style="background-color:#2a2730">
      <div class="footer-copyright">
          <div class="container">
            <span class="text-center">Todos los derechos reservados</span>
          </div>
      </div>
      <script type="text/javascript" src="{{url('partnerts/js/app.min.js')}}">
      </script>
  </footer>
</body>
</html>
