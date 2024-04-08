<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Email address to receive the contact form data
  $to = 'your-email@example.com';

  // Email subject
  $subject = 'New Contact Form Submission';

  // Email body
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Headers
  $headers = "From: $email\r\nReply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message! We'll get back to you shortly.";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
