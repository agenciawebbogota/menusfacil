{{-- @php
echo  md5(12345);
@endphp

<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu">
  <input name="merchantId"    type="hidden"  value="508029"   >
  <input name="accountId"     type="hidden"  value="646874" >
  <input name="description"   type="hidden"  value="Test PAYU"  >
  <input name="referenceCode" type="hidden"  value="TestPayU 10" >
  <input name="amount"        type="hidden"  value="3"   >
  <input name="tax"           type="hidden"  value="0"  >
  <input name="taxReturnBase" type="hidden"  value="16806" >
  <input name="currency"      type="hidden"  value="COP" >
  <input name="signature"     type="hidden"  value="cea0d8e7a6099c09dc555512ed5ea463"  >
  <input name="test"          type="hidden"  value="1" >
  <input name="buyerEmail"    type="hidden"  value="agenciawebbogota@gmail.com" >
  <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/repuesta')}}" >
  <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/suscripcion-exitosa')}}" >
  <input name="Submit"        type="submit"  value="Enviar" >
</form> --}}
{{-- merchantId: 508029
ApiKey: 4Vj8eK4rloUd272L48hsrarnUA
referenceCode: TestPayU
accountId: 512326
description: Test PAYU
amount: 3
tax: 0
taxReturnBase: 0
currency: USD
signature: ba9ffa71559580175585e45ce70b6c37
test: 1
buyerEmail: test@test.com --}}








<p style="text-align:center">Renueva tu suscripción</p>

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
      <input name="amount" type="hidden" value="87000"/>
      <input name="tax" type="hidden" value="0"/>
      <input name="taxReturnBase" type="hidden" value="0"/>
      <input name="currency" type="hidden" value="COP"/>
      <input name="lng" type="hidden" value="es"/>
      <input name="test" value="1" type="hidden">
      <input name="approvedResponseUrl" type="hidden" value="{{url('confirmacion/suscripcion-exitosa')}}"/>
      <input name="declinedResponseUrl" type="hidden" value="{{url('/confirmacion/repuesta')}}"/>
      <input name="pendingResponseUrl" type="hidden" value="{{url('confirmacion/suscripcion-pendiente')}}"/>
      <input name="displayShippingInformation" type="hidden" value="NO"/>
      <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
      <input name="buttonType" value="SIMPLE" type="hidden"/>
      <input name="signature" value="1c1c179edf191058f5a166ef2230127d6b8eb258f822977af9c5782963bbc122" type="hidden"/>
    </form>
    <!-- Fin Boton -->
  </div>
</div>
<p style="text-align:center">No cierres tu sesión hasta el pago sea completado.</p>
