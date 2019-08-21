<?php

 if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $mailFrom = $_POST['email'];
   $message = $_POST['message'];

   $mailTo = "ajaysree2510@gmail.com";
   $headers = "From: ".$mailFrom;


   $emailBody = "User Name: $name.\n".
                "User Email: $mailFrom. \n".
                "Message: $message. \n";

    $headers = "From: $mailFrom \r\n";

   mail($mailTo,$emailBody,$headers );
   header("Location: index.html");
 }

 ?>
