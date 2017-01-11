<?php
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];
 
$to = "votre-email@gmail.com";
$subject = "Mon Contact Form";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;
 
 
$from = "Blueseodesign";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
  echo "<p style="text-align:center;font-size:18px; color:green;">
  Votre mail est bien envoyer.</p>
  <p style="text-align:center;font-size:18px; color:green;">
  <a href="index.html">Cliquez ici pour retourner a l'accueil du site</a>
  </p">



?>