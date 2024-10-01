<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    
    if (empty($name) || empty($email) || empty($message)) {
        echo "Alle velden zijn verplicht!";
        exit;
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ongeldig e-mailadres.";
        exit;
    }

   
    $to = "jmojairam@gmail.com";  
    $subject = "Nieuw bericht van $name via je website";

    
    $email_content = "Naam: $name\n";
    $email_content .= "E-mail: $email\n\n";
    $email_content .= "Bericht:\n$message\n";


    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

   
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Bedankt voor je bericht! Ik neem zo spoedig mogelijk contact met je op.";
    } else {
        echo "Er is een probleem opgetreden bij het versturen van je bericht.";
    }
}
?>
