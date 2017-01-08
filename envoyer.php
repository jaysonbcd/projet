<?php

// Get values from the form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];
 
$to = "boucaud.jayson@gmail.com";
$subject = "Mon Contact Form";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;
 
 
$from = "Jayson";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='merci.html';</script>";
}else{
  echo "Erreur! Veuillez Remplir les Champs Requis.";
}


?>