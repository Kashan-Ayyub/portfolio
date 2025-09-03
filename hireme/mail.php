<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $hireType = htmlspecialchars($_POST['hire_type']);
    $message  = htmlspecialchars($_POST['message']);

    // Apna email yahan likho
    $to      = "kashanayyub21@gmail.com";
    $subject = "New Contact Form Submission from Portfolio";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nHire Type: $hireType\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid Request!";
}
?>
