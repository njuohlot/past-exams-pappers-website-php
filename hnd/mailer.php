<?php
if(isset($_POST['name'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subjectSend = htmlspecialchars(trim($_POST['subject']));
    $messageSend = htmlspecialchars(trim($_POST['message']));
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = 'success@gatewaycmr.com';
    $to = 'njuohlottimngum@gmail.com';
    $subject = $subjectSend;
    $message = $messageSend;
    $headers = 'From' . $from;
    mail($to, $subject, $message, $headers);
    echo '<script>alert("The Email was sent successfuly")</script>';
    
}else{
header('Location: http://localhost/gateways/hnd/index.php');
}

