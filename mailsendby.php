<?php
if(isset($_POST['email'])) {

    // Debes editar las pr�ximas dos l�neas de c�digo de acuerdo con tus preferencias
    $email_to = "ofjipizc@gmail.com";
    $email_subject = "Contacto desde el sitio web";

    // Aqu� se deber�an validar los datos ingresados por el usuario
    if(!isset($_POST['name']) ||
    //isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    //!isset($_POST['telephone']) ||
    !isset($_POST['message'])) {

        echo "<b>Ocurri� un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atr�s y verifique la informaci�n ingresada<br />";
        die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['name'] . "\n";
    //$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    //$email_message .= "Tel�fono: " . $_POST['telephone'] . "\n";
    $email_message .= "Comentarios: " . $_POST['message'] . "\n\n";


    // Ahora se env�a el e-mail usando la funci�n mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    echo "�El formulario se ha enviado con �xito!";
}
?>