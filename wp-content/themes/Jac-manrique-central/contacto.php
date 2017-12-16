<?php
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Email = $_POST['Email'];
  $Tel = $_POST['Tel'];
  $Mensaje = $_POST['Mensaje'];
  $from = 'From: www.jacmanriquecentral.org';
  $to = 'info@jacmanriquecentral.org';
  $subject = 'Hola';

  $body = "From: $Nombre\n, $Apellido\n  E-Mail: $Email\n Tel: $Tel\n Mensaje:\n $Mensaje";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
       echo 'enviado'
     } else {
      echo 'oops no se pudo enviar';
     }
  }
?>
