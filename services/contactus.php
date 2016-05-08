<?php


if(!isset($_POST['email']) ||!isset($_POST['name']) ||!isset($_POST['message']) ){
    echo 'failed';
    exit(1);
}

$email_id = $_POST['email'];
$name = $_POST['name'];
$message = strip_tags($_POST['message']);

if(mail('support@medpalplus.com', $name, $message + '<br><br>' + $email)){
    echo 'sent';
}else{
    echo 'failed';
}


?>