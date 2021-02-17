<?php

if (isset($_POST['submit'])){
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    $to = "earlchristianbantay@gmail.com"; // Change this email to your //
    $subject = "$m_subject:  $name";
    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
    $header = "From: $email";
    $header .= "Reply-To: $email";	
    
     mail($to, $subject, $body, $email);
     header("Location: index.php?mailsent");
}


?>
