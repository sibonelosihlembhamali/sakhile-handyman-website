<?php
if (isset($_POST['submit'])) {

  $fullName = $_POST['full-name'];
  $contactNumber = $_POST['contact-number'];
  $mailFrom = $_POST['email'];
  $service = $_POST['service'];

  $mailTo = "info@sakxhandymanservices.co.za"
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$fullName.".\n\n".$service;


  mail($mailTo, $txt, $headers);
}