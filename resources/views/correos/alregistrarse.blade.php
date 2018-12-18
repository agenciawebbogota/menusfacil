<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bienvenido a Menus Fácil</title>
<style type="text/css">
body {
	Margin: 0;
	padding: 0;
	min-width: 100%;
	font-family: Arial, sans-serif;
}
table {
	border-spacing: 0;
	color: #333333;
}
.wrapper {
	width: 100%;
	table-layout: fixed;
}
.outer {
	Margin: 0 auto;
	width: 100%;
	max-width: 600px;
}
.inner {
	padding: 10px;
}
p {
	Margin: 0;
	padding-bottom: 10px;
  color: #0d0d0d;
}
.one-column p {
	font-size: 14px;
	Margin-bottom: 10px;
}
.two-column {
	text-align: center;
}
.two-column img {
	width: 100%;
	max-width: 280px;
	height: auto;
}
.button_link{
	width:250;
	display:block;
	text-decoration:none;
	border:0;
	text-align:center;
	font-weight:bold;
	font-size:18px;
	color: #ffffff;
}
</style>
</head>

<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f3f2f0;">
<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f3f2f0;">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f2f0;" bgcolor="#f3f2f0;">
    <tr>
      <td width="100%"><div class="webkit" style="max-width:600px;Margin:0 auto;">

          <table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;">
            <tr>
              <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">

                <table border="0" width="100%" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td><table style="width:100%;" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                          <tr>
                            <td align="center"><center>
                                <table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" style="Margin: 0 auto;">
                                  <tbody>
                                    <tr>
                                      <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" bgcolor="#FFFFFF">

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#f3f2f0">
                                          <tr>
                                            <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;font-size:0;" >

                                              <div class="column" style="width:100%;max-width:150px;display:inline-block;vertical-align:top;">
                                                <table class="contents" style="border-spacing:0; width:100%"  >
                                                  <tr>
                                                    <td><img src="{{url('/correos/img/logo-menusfacil.svg')}}" alt="" width="200" height="200" /></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              </td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </table>


                <table class="one-column" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing:0; border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5; border-bottom:1px solid #e8e7e5; border-top:1px solid #e8e7e5" bgcolor="#FFFFFF">
                  <tr>
                    <td align="left" style="padding:50px"><p style="color:#2b2831; font-size:24px; text-align:left; font-family: Verdana, Geneva, sans-serif"><strong>¡Casi estamos listos!</strong></p>
                      <p style="font-size:16px; text-align:left; line-height:22px ">Confirma tu suscripción a Menús Fácil para comenzar a disfrutar de tu periodo gratuito:</p>
											<table border="0" align="left" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                        <tbody>
                          <tr>
                            <td aling="center">
                                {{-- <h5>Código QR para tus clientes</h5>
                                <img src="{!!$message->embedData(QrCode::format('png')->size(350)->generate(url('cliente/'.$user->url)), 'QrCode.png', 'image/png')!!}"> --}} --}}
                            </td>
                            <div style="display:block;">
                            <td align="center"><table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                <tr>
                                  <td>
                                    <a class="confirma" href="{{url("/confimacliente/$user->email/$user->id")}}">Confirma tu cuenta aquí</a>
                                  </td>
                                  <br><br>
                                  
                                </tr>
                            </td>
                          </div>
                          </tr>
													<tr>
														<td style="padding-top:20px">
															<p>Luego de confirmar tus suscripción recibirás un correo con tus datos de acceso y todas las instrucciones para implementar con éxito Menús Fácil en tu negocio.</p>
														</td>
													</tr>
                        </tbody>
                      </table>
											{{-- <p>Link para pedidos: {{ url("/cliente/".$user->url) }}</p> --}}
                      {{-- <p>Usuario: {{$user->email}}</p> --}}
                      {{-- <p>Contraseña: ******</p> --}}
                      {{-- <p>Correo electrónico: {{$user->email}}</p> --}}
                      <br/>
                      <br/>

                  </tr>
                </table>


                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding-bottom: 30px">
                  <tr>
                    <td height="30">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">Síguenos en Facebook</td>
                  </tr>

                  <tr>
                    <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0">

                      <div class="column" style="width:100%;max-width:248px;display:inline-block;vertical-align:top;">
                        <table width="100%" style="border-spacing:0">
                          <tr>
                            <td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;"><table class="contents" style="border-spacing:0; width:100%">
                                <tr>
                                  <td width="32%" align="center" valign="top" style="padding-top:10px"><table width="150" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="33" align="center"><a href="https://www.facebook.com/Menús-Fácil-236578603662891/" target="_blank"><img src="{{url('correos/img/fb.png')}}" alt="facebook" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      </td>
                  </tr>
                </table>
                </td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
</center>
</body>
</html>
