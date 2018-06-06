<?php
include 'process.php';
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "kanyapandey2603@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  else {
    echo "Couldn't be able to send mail";
  }
  //if "email" variable is not filled out, display the form

?>
