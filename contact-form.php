<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'jhncsrpbl@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User name: $name.\n". 
                    "User email: $visitor_email.\n". 
                    "User message: $message.\n";

    $to = "jhncsrpbl@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>