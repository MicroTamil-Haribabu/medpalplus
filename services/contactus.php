<?php

var_dump($_REQUEST);

if(!isset($_REQUEST['email']) ||!isset($_REQUEST['name']) ||!isset($_REQUEST['message']) ){
    echo 'failed';
    exit(1);
}

$email_id = $_REQUEST['email'];
$name = $_REQUEST['name'];
$message = strip_tags($_REQUEST['message']);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email_id.'>' . "\r\n";

if(mail('support@medpalplus.com', $name, $message.'<br><br>'.$name.'<br>('.$email_id.')', $headers)){
    echo 'sent';
}else{
    echo 'failed';
}


?>