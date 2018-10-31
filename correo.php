<?php


$destino="vale79211@gmail.com";
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];
$carta ="De: $nombre \n";
$carta .="Correo:  $correo \n";
$carta .="Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje ";
/*
$nombre=$_POST["nombre"];
$asunto = $_POST["asunto"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$ciudad = $_POST["cedula"];
$pais = $_POST["pais"];
$mensaje = $_POST["mensaje"];*/
/*
$contenido ="Nombre: ".$nombre ."correo: ".$email .
"telefono: ". $telefono . "Mensaje: " . $mensaje;
if(mail($destino, "Contacto", $contenido))
{
	echo "se envio mensaje ";
}
else{
	echo "no se envio mensaje";
}
*/

mail($destinatario, $asunto, $carta);
header("Location:mensaje.html");




















//Comprobamos que se haya presionado el boton enviar
/*
if(isset($_POST['enviar'])){
//Guardamos en variables los datos enviados
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];

/*
///Validamos del lado del servidor que el nombre y el email no estén vacios
if($nombre == ""){
echo "Debe ingresar su nombre";
}
else if($email == ""){
echo "Debe ingresar su email";
}else{
$para = "vale79211@gmail.com";//Email al que se enviará
$asunto = "";//Puedes cambiar el asunto del mensaje desde aqui
//Este sería el cuerpo del mensaje
$mensaje = "
<table border=’0′ cellspacing=’3′ cellpadding=’2′>
<tr>
<td width=’30%’ align=’left’ bgcolor=’#f0efef’><strong>Nombre:</strong></td>
<td width=’80%’ align=’left’>$nombre</td>
</tr>
<tr>
<td align=’left’ bgcolor=’#f0efef’><strong>E-mail:</strong></td>
<td align=’left’>$email</td>
</tr>
<tr>
<td width=’30%’ align=’left’ bgcolor=’#f0efef’><strong>Teléfono:</strong></td>
<td width=’70%’ align=’left’>$telefono</td>
</tr>
<tr>
<td width=’30%’ align=’left’ bgcolor=’#f0efef’><strong>Ciudad:</strong></td>
<td width=’70%’ align=’left’>$ciudad</td>
</tr>
<tr>
<td width=’30%’ align=’left’ bgcolor=’#f0efef’><strong>País:</strong></td>
<td width=’70%’ align=’left’>$pais</td>
</tr>
<tr>
<td align=’left’ bgcolor=’#f0efef’><strong>Comentario:</strong></td>
<td align=’left’>$mensaje</td>
</tr>
</table>
";
/*
//Cabeceras del correo
$headers = "From: $nombre <vale79211@gmail.com>\r\n"; //Quien envia?
$headers .= "X-Mailer: PHP5\n";
$headers .= ‘MIME-Version: 1.0’ . "\n";
$headers .= ‘Content-type: text/html; charset=iso-8859-1’ . "\r\n"; //*/
//$headers = "From: $nombre <$email>\r\n"; //Quien envia?
//$headers = "From: $nombre <$email>\r\n"; //Quien envia?
/*
$headers = "From: $email \r\n"; //Quien envia?

$headers .= "X-Mailer: PHP5\n";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n"; 
*/
/*
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8". "\r\n";
$headers .= "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();


}
//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
if(mail($para, $asunto, $mensaje )){
echo "Su mensaje se ha enviado correctamente";
echo "<br />";
//echo ‘<a href="../formulario_contacto.html">Volver</a>’;
}else{
echo "Hubo un error en el envío inténtelo más tarde";

}
*/
?>