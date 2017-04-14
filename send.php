<?php

  $nombre = $_POST['name'];
  $mail = $_POST['email'];
  $asuntoUsuario = $_POST['subject'];
  $mensaje = $_POST['message'];

  $cuerpo = 'Remitente: ' . $nombre . '<br>';
  $cuerpo .= 'Email: ' . $mail . '<br>';
  $cuerpo .= 'Mensaje: ' . $mensaje . '<br>';

  $destino = 'vicky.8525@gmail.com';
  $asunto = $asuntoUsuario;

  $encabezados = 'MIME-Version: 1.0' . "\r\n";
  $encabezados .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
  $encabezados .= 'From: ' . $nombre . '<' . $mail . '>' . "\r\n"; 

  mail( $destino, $asunto, $cuerpo, $encabezados );
  header("Location: thankyou.html"); 

?>