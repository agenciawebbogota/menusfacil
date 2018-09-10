        @php
          $ApiKey = 'w3Q56suC9RD1sM8WEh5wUf75ri';
          $merchanId = 644473;
          $accoundId = 646874;
          $descripcion = 'Compras para MenusFacil.';
          $valor = 89000;
          $moneda = 'COP';
          $referencia = 'PAGO'.time(). rand(100,1000);
          $signature = md5($ApiKey.'~'.$merchanId.'~'.$referencia.'~'.$valor.'~'.$moneda);
        @endphp
        <div class="row">
          <div style="margin-top:20px;">
            <form novalidate class="md-layout" method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
              <input name="merchantId"    type="hidden"  value="{{$merchanId}}"   >
              <input name="accountId"     type="hidden"  value="{{$accoundId}}" >
              <input name="description"   type="hidden"  value="{{$descripcion}}"  >
              <input name="referenceCode" type="hidden"  value="{{$referencia}}" >
              <input name="amount"        type="hidden"  value="{{$valor}}"   >
              <input name="tax"           type="hidden"  value="0"  >
              <input name="taxReturnBase" type="hidden"  value="0" >
              <input name="currency"      type="hidden"  value="COP" >
              <input name="signature"     type="hidden"  value="{{$signature}}"  >
              {{-- <input name="test"          type="hidden"  value="1" > --}}
              <input type="hidden" name="extra1" value="{{Auth::user()->id}}">
              <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
              <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/respuesta')}}" >
              <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/confirmacion')}}" >
              <button type="submit" class="btn col s8 l2 offset-s2 offset-l5" style="background-color:#e88a10;">Renovar</button>
            </form>
          </div>
        </div>
 <p style="text-align:center">Renueva tu suscripción</p>
{{--
<div class="row">
  <div class="img-pago">
    <!-- Boton PayU -->
    <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
      <input type="image" border="0" alt="" src="http://agenciawebbogota.com/social/boton-pagar.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
      <input name="buttonId" type="hidden" value="iTBmFbx+1Fyy7Pe4hIPsFPE3bIVkltlKm5huATupPoVNFmQFfNDpug=="/>
      <input name="merchantId" type="hidden" value="644473"/>
      <input name="accountId" type="hidden" value="646874"/>
      <input name="description" type="hidden" value="Suscripción mensual MenúsFácil"/>
      <input name="referenceCode" type="hidden" value="01"/>
      <input name="amount" type="hidden" value="87000.00"/>
      <input name="tax" type="hidden" value="0.00"/>
      <input name="taxReturnBase" type="hidden" value="0.00"/>
      <input name="currency" type="hidden" value="COP"/>
      <input name="lng" type="hidden" value="es"/>
      <input name="approvedResponseUrl" type="hidden" value="{{url('confirmacion/suscripcion-exitosa')}}"/>
      <input name="declinedResponseUrl" type="hidden" value="{{url('confirmacion/fallo')}}"/>
      <input name="pendingResponseUrl" type="hidden" value="{{url('confirmacion/suscripcion-pendiente')}}"/>
      <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
      <input name="buttonType" value="SIMPLE" type="hidden"/>
      <input name="signature" value="1c1c179edf191058f5a166ef2230127d6b8eb258f822977af9c5782963bbc122" type="hidden"/>
    </form>
    <!-- Fin Boton -->
  </div>
</div> --}}
<p style="text-align:center">No cierres tu sesión hasta el pago sea completado.</p>
