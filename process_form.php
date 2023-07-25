<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate form data (you can add more validation if required)
  if (empty($name)  empty($email)  empty($message)) {
    echo "Please fill in all fields";
    exit;
  }

  // Set up email details
  $to = "butka03103@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";

  // Send email
  $headers = "From: " . $email . "\r\n";
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message. We'll get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
