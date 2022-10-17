<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

# Aquí pon la clave secreta que obtuviste en la página de developers de Google
define("CLAVE_SECRETA", "6Lfo-GwcAAAAAD9_O3JCC7zPnIGRi3JMdqrMpjhz");

# Comprobamos si enviaron el dato
if (!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
    exit("Debes completar el captcha");
}

# Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
$token = $_POST["g-recaptcha-response"];
$verificado = verificarToken($token, CLAVE_SECRETA);
# Si no ha pasado la prueba
if ($verificado) {

    if(isset($_POST['enviar'])) {
        include("class.phpmailer.php");

        extract($_POST);

        $mail = new phpmailer();
        $mail->From = "web@sli.mx";
        $mail->FromName = "Contacto SLIl";
        $mail->Subject = "Ha recibido un nuevo contacto.";

        //$mail->AddAddress ("");
        $mail->AddBCC ("contacto@sli.mx");
        $mail->AddReplyTo ("$correo");
        $mail->Body = "
        <div style='width:100%;margin:0;padding:0;background-color:#f5f5f5;font-family:Helvetica,Arial,sans-serif' marginheight='0' marginwidth='0'>
            <div style='display:block;min-height:5px;background-color:#EB1D24'></div>
            <center>
            <table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                <tbody>
                    <tr>
                    <td valign='top' align='center' style='border-collapse:collapse;color:#525252'>
                        <table width='85%' cellspacing='0' cellpadding='0' border='0'>
                            <tbody>
                                <tr>
                                    <td valign='top' height='20' align='center' style='border-collapse:collapse;color:#525252'></td>
                                </tr>
                                <tr>
                                    <td valign='top' align='center' style='border-collapse:collapse;color:#525252'>
                                        <table width='100%' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td height='34' style='border-collapse:collapse;color:#525252'></td>
                                                </tr>
                                                <tr>
                                                    <td align='center' style='border-collapse:collapse;color:rgb(82,82,82);font-family:Helvetica,Arial,sans-serif;font-size:30px;font-weight:bold;line-height:120%;text-align:center' colspan='3'>
                                                        Contacto SLI
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align='center' style='border-collapse:collapse;color:#525252;font-size:15px' colspan='3'></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                                <tr>
                                    <td height='38' align='center' style='border-collapse:collapse;color:#525252'></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width='100%' style='border-spacing:0px'>
                                            <tbody>
                                                <tr valign='middle'>
                                                    <td width='100%' valign='middle' align='left' style='border-collapse:collapse;color:#525252;padding:10px;background-color:rgb(255,255,255);border-color:rgb(221,221,221);border-width:1px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-style:solid;font-size:12px;padding:40px!important;vertical-align:middle'>
                                                        <table cellspacing='0' cellpadding='5px' border='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='border-collapse:collapse;color:#525252;padding-right:15px'><b style='color:#888;font-size:10px;text-transform:uppercase'>NOMBRE</b></td>
                                                                    <td style='border-collapse:collapse;color:#525252'>$nombre</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='border-collapse:collapse;color:#525252;padding-right:15px'><b style='color:#888;font-size:10px;text-transform:uppercase'>CORREO</b></td>
                                                                    <td style='border-collapse:collapse;color:#525252'><a target='_blank' href='mailto:$correo'>$correo</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='border-collapse:collapse;color:#525252;padding-right:15px'><b style='color:#888;font-size:10px;text-transform:uppercase'>TELEFONO</b></td>
                                                                    <td style='border-collapse:collapse;color:#525252'>$telefono</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='border-collapse:collapse;color:#525252;padding-right:15px'><b style='color:#888;font-size:10px;text-transform:uppercase'>EMPRESA</b></td>
                                                                    <td style='border-collapse:collapse;color:#525252'>$empresa</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='border-collapse:collapse;color:#525252;padding-right:15px'><b style='color:#888;font-size:10px;text-transform:uppercase'>COMENTARIOS</b></td>
                                                                    <td style='border-collapse:collapse;color:#525252'>$comentarios</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign='top' height='33' align='center' style='border-collapse:collapse;color:#525252'></td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                    </tr>
                </tbody>
            </table>
            </center>
            </div>
        ";

        $mail->IsHTML (true);
        $mail->Send();
        //$emailSent = true;
        header("Location: ./gracias.php");

    }

} else {
    return redirect('./index.php');

}

/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 *
 * Más información: https://parzibyte.me/blog/2019/08/21/peticion-http-php-json-formulario/
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }

    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/

    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}
?>