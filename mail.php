<?php

// Set the recipient email address(es)
$to = 'contact@qhubaib.in';

// Set the email subject
$subject = 'New Contact Form Submission';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['form-message'];

// Construct the email body
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Send the email
mail($to, $subject, $body, $headers);

// Redirect back to the contact form page
header('Location: index.html');

?>
