<?php
  require 'vendor/autoload.php'; // If you're using Composer (recommended)

  $fname = $_POST['FNAME'];
  $lname = $_POST['LNAME'];
  $email = $_POST['EMAIL'];
  $company = $_POST['COMPANY'];
  $message = $_POST['MESSAGE'];

  $email_from = "$email";
  $email_subject = "$fname $lname — $company";
  $email_body = "$message";

  $to = "sudobytesoftware@gmail.com";


$mailer = new \SendGrid\Mail\Mail();
$mailer->setFrom("sudobytesolutions@sudobyte.com", "$email");
$mailer->setSubject("$fname $lname, $company");
$mailer->addTo("sudobytesolutions@sudobyte.com");
$mailer->addContent("text/plain","$message");

$sendgrid = new \SendGrid("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");
try {
    $response = $sendgrid->send($mailer);
      echo 'We got your email, and will contact you shortly';
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}


 ?>
