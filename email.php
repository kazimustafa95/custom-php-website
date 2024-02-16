<?php
if(isset($_POST['submit'])){
    
         	$name=$_POST['Name'];
         	$email=$_POST['Email'];
         	$phone=$_POST['Tel'];
         	$message=$_POST['Message'];
   
         	$message="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Phone</td><td>$phone</td></tr><tr><td>Message</td><td>$message</td></tr></table>";
         	
         	$to = 'info@albertaengineeringgroup.com';
             $subject = 'Alberta Engineering Group';
             $from = $email;
             // To send HTML mail, the Content-type header must be set
             $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; chargeset=iso-8859-1' . "\r\n";
             // Create email headers
             $headers .= 'From: '.$from."\r\n".
             'Reply-To: '.$from."\r\n" .
             'X-Mailer: PHP/' . phpversion();
                 				
             // Sending email
             if(mail($to, $subject, $message, $headers)){
         		echo "<script>window.location='thank-you.php';</script>";
         		
             }else{
         		echo "alert('Error in sending feddback')";
             }
         	
         }
  
?>