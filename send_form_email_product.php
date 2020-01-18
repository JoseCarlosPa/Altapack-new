<?php
if (isset($_POST['submit'])){

    $mail_setFromEmail=$_POST['correo'];
    $nombre =$_POST['nombre'] ;
    $mensaje = $_POST['asunto'];
    $producto = $_POST['producto'];
    $telefono = $_POST['telefono'];
    $destinatario = "ventas@altapack.com";
    $asunto = 'Interesado en Producto de Altapack';
    $cuerpo = '
    <html>
        <h1 align="center">Mensaje enviado desde el formulario de Productos de Altapack</h1>     
        <h3 align="center">El siguiente correo quiere contactarse: <br><b>Email:</b> '.$mail_setFromEmail.'</h3>
        <h3 align="center">A nombre de:<br><b>Nombre:</b> '.$nombre.'</h3>
        <h3 align="center"><b>Producto:</b> '.$nombre.'</h3>
        <h3 align="center"><b>Mensaje:</b> '.$mensaje.'</h3>
         <h3 align="center"><b>Telefono:</b> '.$telefono.'</h3>
      
    </html>'
    ;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    mail($destinatario,$asunto,$cuerpo);
    header('Location: index.php');

}else{
    header('Location: index.php');
}




?>