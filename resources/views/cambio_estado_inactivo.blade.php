<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>TusComprasHoy</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <style>

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>
</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1; font-family: 'Lato', sans-serif;
        	font-weight: 400;
        	font-size: 15px;
        	line-height: 1.8;
        	color: rgba(0,0,0,.4); margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" style="padding: 1em 2.5em 0 2.5em; background: #ffffff;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
			            <h1 style="color: rgba(255,192,21);font-size: 24px;font-weight: 700;font-family: 'Lato', sans-serif;">Hola {{$Nombre}} {{$Apellido}}</h1>
			         </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
	      <tr>
          <td valign="middle" class="hero " style="padding: 1em 0 0em 0; background: #ffffff;">
            <i class="fas fa-envelope-open-text" style="    width: 250px;
                max-width: 600px;
                height: auto;
                margin: auto;
                display: block;
                font-size: 250px;
                color: #ddd;">
            </i>
            <!-- <img src="images/email.png" alt="" > -->
          </td>
	      </tr><!-- end tr -->
				<tr>
          <td valign="middle" class="hero" style="padding: 2em 0 4em 0; background: #ffffff;">
            <table>
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: center;">
            				<h3 style="color: black;">TusComprasHoy</h3>
            				<h4 style="text-align: justify; color: black;">Queremos comunicarte que tu usuario ha sido desactivado por un incumplimiento de nuestras normativas, por favor comunícate con nuestro centro de atención, te atenderemos lo más pronto posible!.</h4>
            			<br>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" style="background: #fafafa; padding:2.5em; border-top: 1px solid rgba(0,0,0,.05);
        	color: rgba(0,0,0,.5);">
        			<p style="text-align: justify; padding: 20px; color: black;"><!-- No longer want to receive these email? You can <a href="#" style="color: rgba(0,0,0,.8);">Unsubscribe here</a> -->
             Aviso de Confidencialidad Este mensaje de correo electrónico y los archivos anexos que contenga son de uso exclusivo de las personas o entidades destinatarias. Este mensaje puede contener información confidencial, de uso reservado y protegida legalmente. Si usted ha recibido este correo por equivocación tiene completamente prohibido su utilización, copia, impresión, reenvío o cualquier otra acción que divulgue su contenido o el de los archivos anexos. En este caso, por favor notifique al remitente acerca de la equivocación cometida y elimine este correo electrónico de sus sistemas de almacenamiento. Las opiniones que contenga este mensaje son exclusivas de su autor y no necesariamente representan la opinión oficial de TusComprasHoy - Nauticgps 
            </p>
     
                </td>

              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->

      </table>

    </div>
  </center>
</body>
</html>





