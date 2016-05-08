<?php

var_dump($_POST);

if(!isset($_POST['email']) ||!isset($_POST['name']) ||!isset($_POST['message']) ){
    echo 'failed';
    exit(1);
}

$email_id = $_POST['email'];
$name = $_POST['name'];
$message = strip_tags($_POST['message']);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email_id.'>' . "\r\n";

if(mail('support@medpalplus.com', $name, $message.'<br><br>'.$name.'<br>('.$email_id.')', $headers)){
    echo 'sent';
}else{
    echo 'failed';
}


?>