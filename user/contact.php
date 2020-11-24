<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    
    $mailTo = "hello@nextpredict.com";
    $headers = "From: ".$mailFrom;
    $txt = "You've received an email from ".$name.".\n\n\n".$message;
    
    
    
    
    mail($subject, $mailTo,  $txt, $headers);
    header("Location: index.php?mailsend");
}
 
