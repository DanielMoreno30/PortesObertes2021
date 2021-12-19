<?php

if(isset($_POST['email'])){

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

require '../php_libraries/PHPMailer/src/Exception.php';
require '../php_libraries/PHPMailer/src/PHPMailer.php';
require '../php_libraries/PHPMailer/src/SMTP.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'danimoreno80@gmail.com';                 // SMTP username
    $mail->Password = '120218nd';                           // SMTP password
    $mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email);
    $mail->addAddress('dmorenof2021@cepnet.net', 'client');     // Add a recipient
    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $nombre;
    $mail->Body    = $mensaje;


    $mail->send();
    // header("Location: formcontacto.php");
    echo "<script>alert('Correo Enviado');</script>";
} catch (Exception $e) {
    echo 'No se pudo enviar el correo: ', $mail->ErrorInfo;
}}

else
{
	echo "mensaje no enviado";
}
?>