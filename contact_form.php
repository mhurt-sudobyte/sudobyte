<?php
  $fname = $_POST['FNAME'];
  $lname = $_POST['LNAME'];
  $email = $_POST['EMAIL'];
  $company = $_POST['COMPANY'];
  $message = $_POST['MESSAGE'];

  $email_from = "$email";
  $email_subject = "$fname $lname — $company";
  $email_body = "$message";

  $to = "sudobytesoftware@gmail.com"

  mail($to,$email_subject,email_body)


 ?>
