<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$recipient = 'nouhailahajjimi@gmail.com';

// Set the email subject
$mailSubject = 'New Contact Form Submission: ' . $subject;

// Compose the email message
$mailMessage = "Name: $name\n";
$mailMessage .= "Email: $email\n";
$mailMessage .= "Message:\n$message";

// Set the email headers
$mailHeaders = "From: $name <$email>\r\n";

// Send the email
$mailSent = mail($recipient, $mailSubject, $mailMessage, $mailHeaders);

// Check if the email was sent successfully
//if ($mailSent) {
   // Redirect to a success page
   //header('Location: success.html');
//} else {
   // Redirect to an error page
   //header('Location: error.html');
//}
