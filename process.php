<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "opreamadalinamirela@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $subject, "From:" . $email);
    
    header('Location: http://edgeledger.net/success.html');
  }