<?php

    $myAwardSpaceEmail = "contact@paulokonko.com";
    $myPersonalEmail = "contact@paulokonko.com";
    
    if(isset($_POST['submit'])) {
        $firstname = $_POST['subject'];
        $email = $_POST['email'];
        $title = $_POST['name'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo 'Please try again. Your mail was not sent!';
    }
?>