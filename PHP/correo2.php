

<?php

    $destinatario = 'zooey0527@gmail.com';
    // esto es al correo al que se enviara en mensaje
    $nombre = $_POST['nombre'];

    $asunto = $_POST['asunto'];

    $mensaje = $_POST['mensaje'];

    $email = $_POST['email'];

    $header = "Enviado desde la pagina de KIDS'S FACHION0527";
    $mensaje = $mensaje . "\nAtentamente:" . $nombre;

    @mail($destinatario, $asunto, $mensaje, $header );
      echo "<script>alert(´correo enviado exitosamente´</script>";
    echo "<script> set Timeout(\"location.href=´../HTML/correo.html´\",1000)</script>";

?>\ 
