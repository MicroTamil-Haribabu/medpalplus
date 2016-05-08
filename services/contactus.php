<?php

if(!isset($_REQUEST['email']) ||!isset($_REQUEST['name']) ||!isset($_REQUEST['message']) ){

    $postdata = file_get_contents("php://input");
    if (isset($postdata)) {
        $request = json_decode($postdata);
        if(isset($request->email)){
            $username = $request->email;
            $email_id = $request->email;
            $name = $request->name;
            $message = strip_tags($request->message);
        }else{
            echo 'failed';
        }
    }else{
        echo 'failed';
    } 
  
}else{
    $email_id = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $message = strip_tags($_REQUEST['message']);
}


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: <'.$email_id.'>' . "\r\n";

if(mail('support@medpalplus.com', 'Contact : '.$name, $message.'<br><br>'.$name.'<br>('.$email_id.')', $headers)){
    echo 'sent';
}else{
    echo 'failed';
}


?>