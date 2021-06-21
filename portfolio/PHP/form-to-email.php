<?php
if(!isset($_POST['submit'])){
    echo 'error; Need to submit the form';
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//validation
if(empty($name) || empty($visitor_email)){
    echo 'Name and Email are required';
    exit;
}

$to = "jakeandrewlund@hotmail.com";
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$subject,$message,$headers);
