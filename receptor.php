<?php
if ($_REQUEST['destino'] != "") {
$dest = $_REQUEST['destino'];
$head = "From: ".$_POST['email']."\r\n";
// Ahora creamos el cuerpo del mensaje
$msg = "------------------------------- \n";
$msg.= " Comentarios \n";
$msg.= "------------------------------- \n";
$msg.= "NOMBRE Y APELLIDO: ".$_REQUEST['nombre']."\n";
$msg.= "EMAIL: ".$_REQUEST['mail']."\n";
$msg.= "TELEFONO: ".$_REQUEST['telefono']."\n";
$msg.= "COMENTARIO: ".$_REQUEST['comentario']."\n";
$msg.= "HORA: ".date("h:i:s a ")."\n";
$msg.= "FECHA: ".date("D, d M Y")."\n";
$msg.= "------------------------------- \n\n";
$msg.= $_REQUEST['mensaje']."\n\n";
$msg.= "------------------------------- \n";

// Finalmente enviamos el mensaje
if (mail($dest, "Comentarios", $msg, $head)) {
echo "rpta=ok";
} else {
echo "rpta=error";
}
}
?>