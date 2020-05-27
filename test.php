<?php
  $to = "test@grasshopperyardservice.com";
  $subject = "Test from test.php";
  $message = "Hello this is a test";
  $from = "info@grasshopperyardservice.com";
  $headers = "From: " . $from;
  mail($to, $subject, $message, $headers, '-f'.$from);
  echo "Mail Sent";
?>
