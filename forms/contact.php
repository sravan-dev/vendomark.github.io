<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'hello@vendomark.com';

  
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$from_email = $_POST['email'];
 // $contact->subject = $_POST['subject'];
  
  
  $to = $receiving_email_address;
$subject = "Enquiry from website";
$txt = $_POST['email'];
$headers = "From: hello@vendomark.com" . "\r\n" .
"CC: sravan@vendomark.com";

mail($to,$subject,$txt,$headers);


header("location:../index.html");


?>
