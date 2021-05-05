<?php
if(!empty($_POST['Enviar'])){
    $email_to = "recibir31@gmail.com";
    $email_subject= "Contacto Usuario";

    $email_message ="Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre de Familia " .$_POST ['familia'] . "\n";
    $email_message .= "Nombre de Personaje " .$_POST ['personaje'] . "\n";
    $email_message .= "Correo de Contacto " .$_POST ['correo'] . "\n";
    $email_message .= "Mensaje " . $_POST ['descripcion'] . "\n";



 mail($email_to, $email_subject, $email_message );
 
}
?>

