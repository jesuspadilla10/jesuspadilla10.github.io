<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject=$_POST['subject'];

    $content = "From: $name \n Email: $email \n Message: $message";
    $mailto = "jesuspadillarey@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($mailto, $subject, $content, $mailheader) or die("Error");
    echo "Mensaje enviado correctamente!!!";

    header('Location: contacto.html');
?>