<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "milicagalicdev@gmail.com"; // Replace with the recipient's email address
  $subject = "Contact Form Submission from $name";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Email could not be sent.";
  }
}
?>
