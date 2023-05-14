<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $reason = $_POST['reason'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $checkbox = isset($_POST['checkbox']) ? 'Yes' : 'No';

  // Validate the data (e.g. check if email is valid, etc.)

  // Send email with the form data
  $to = 'chmoiz06@gmail.com';
  $subject = 'Contact Form Submission';
  $message = "Name: $name\nReason for contacting: $reason\nEmail: $email\nPassword: $password\nAddress: $address\nAddress 2: $address2\nCity: $city\nState: $state\nZip Code: $zip\nCheckbox: $checkbox";
  $headers = "From: $email";

  mail($to, $subject, $message, $headers);
}
?>
