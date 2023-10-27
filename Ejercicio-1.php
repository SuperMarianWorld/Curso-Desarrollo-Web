<?php
$nombre = $_REQUEST['name-surname'];
$email = $_REQUEST['mail'];
$mensaje = $_REQUEST['Mensaje'];

echo "El nombre ingresado es: $nombre";
echo "El email ingresado es: $email";
echo "Su mensaje enviado: $mensaje";

/*La integración del archivo php de éste documento se realiza mediante la invocación del archivo en el documento HTML 
  llamado Index.html
*/
?>
