
<?php

// Get the form data.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

 // Validate the email address.
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit;
  }

// Create an email message.
$subject = 'Website Contact Form';
$body = "You have received a new message from your website contact form:\n\n" .
  "Name: $name\n" .
  "Email: $email\n" .
  "Message: $message";

 

// Send the email.
mail('mertikurunziza@gmail.com', $subject, $body);

// Redirect the user to a thank-you page.
header('Location: email.html');

?>
