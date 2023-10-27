<?php
//Método POST
/*
  Básicamente lo que se está haciendo acá es usar el método POST para recibir
  la información que sea enviada desde el formulario en el apartado HTML
*/

if($_POST){
  $nombre=$_POST('txtname-surname');
  $mail=$_POST('mail');
  $mensaje=$_POST('Mensaje');
  
  echo "El nombre ingresado es: ".$nombre;
  echo "El Email ingresado es: ".$mail;
  echo "El motivo de su consulta recibido: ".$mensaje;
}
/*
  ¿Por qué utilizo una condicional if?
  Porque habiendo utilizado el método POST en un formulario sin el 'if',
  cuando ejecuto en el navegador ocurre un "WARNING" que se debe a que
  el usuario no ha enviado nada. Entonces agregando el 'if' ésto se corrige,
  ya que la aplicación php consulta si se ha enviado algo o no.
  Básicamente el algoritmo funcionaría así: El usuario escribe la información,
  la envía, la aplicación php la recepciona, la almacena en las variables identificadas,
  y luego imprime el valor en pantalla (mediante la línea 'echo').
*/
?>


<!DOCTYPE html>

<html lang="es">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de integración HTML y PHP - Método 2</title>
  </head>
  
  <body>
    <section>
      <h1>EJEMPLO DE INTEGRACION HTML CON PHP - Método 2</h1>
    </section>
        <br>
    <section>
      <h4>FORMULARIO DE CONTACTO</h4>
        <form action="Ejercicio_2.php" method="post">
          <label for="age">Ingrese su Nombre y Apellido:</label>
          <input type="text" name="txtname-surname" id="name-surname">
            <br>
          <label for="email">Ingrese su Email:</label>
          <input type="email" name="mail" id="mail">
            <br>
          <p>Motivo de contacto:</p>
          <textarea placeholder="Mensaje"></textarea><br>
            <br>
          <input type="submit" value="ENVIAR">
            <br>     
        </form>

      <hr>       
    <footer>
      <p id="copyright">COPYRIGHT &copy; Mariano Maldonado: CEO Cyber War Games Productions - TODOS LOS DERECHOS RESERVADOS</p>
    </footer>
      <hr>
  </body>
</html>
