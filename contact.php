<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$phone = $_REQUEST['phone'];
  //check input fields
  if (empty($name) || empty($email) || empty($message) || empty($phone))
 {
	echo "Please fill all the fields";
 }
 else
 {
    mail("rvhospitality2018@gmail.com", "Contact", $message, "From: $phone $name <$email> ");
    echo "<script type='text/javascript'>alert('Message sent');
       window.history.log(-1);
    </script>";
}
?> 