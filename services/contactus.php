<?php

$email_id = @$_POST['email'];
$name = @$_POST['name'];
$message = @strip_tags($_POST['message']);

if(mail('support@medpalplus.com', $name, $message)){
    echo 'sent';
}else{
    echo 'failed';
}


?>