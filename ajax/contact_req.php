<?php

require_once '../mailer/class.phpmailer.php';
$mail = new PHPMailer(true);

$c_name = $_POST["name"];
$c_tel = $_POST["tel"];
$c_email = $_POST["email"];
$c_messege = $_POST["messege"];

if (($c_name!=='')&&($c_tel!=='')&&($c_email!=='')&&($c_messege!=='')) {
    
    $headers = "From: $c_email \r\n";
    $headers .= "Reply-To: $c_email \r\n";
    $headers .= "To: example@gmail.com \r\n";
    $headers .= "X-Mailer: PHP/" . PHP_VERSION;

    $to = "example@gmail.com";
    $subject = "Message from $c_name";
    $body =  "Mobile No: $c_tel \n\n" . $c_messege;

    mail($to, $subject, $body, $headers);
        
    if(mail($to, $subject, $body, $headers)){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Message sent successfully.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Sending Failed. Something went wrong. try again.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>All fields are required!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}

?>