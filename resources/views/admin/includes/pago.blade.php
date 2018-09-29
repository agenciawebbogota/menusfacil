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
              <input name="signature"     type="hidden"  value="{{$signature}}">
              <input type="hidden" name="extra1" value="{{Auth::user()->id}}">
              <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
              <input name="responseUrl"    type="hidden"  value="{{url('confirmacion/respuesta')}}" >
              <input name="confirmationUrl"    type="hidden"  value="{{url('confirmacion/confirmacion')}}" >
              <button type="submit" class="btn col s8 l2 offset-s2 offset-l5" style="background-color:#e88a10;">Renovar</button>
            </form>
          </div>
        </div>
 <p style="text-align:center">Renueva tu suscripción</p>
<p style="text-align:center">No cierres tu sesión hasta el pago sea completado.</p>
