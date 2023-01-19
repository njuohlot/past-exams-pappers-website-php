<?php
ob_start();
if(isset($_POST['username'])) {
  require 'config.php';
  $user =  htmlspecialchars(trim($_POST['username']));;
  $password = $pass = md5(htmlspecialchars(trim($_POST['password'])));;
$query = $conn->prepare('SELECT admin_name, password FROM  admin WHERE (admin_name=:username) AND (password=:password)');
$query->bindParam(':username', $user);
$query->bindParam(':password', $password);
$query->execute();
if($query->rowCount() > 0){
  $_SESSION['login'] = $user;
  header("Location: index.php");
  exit();
}else{
   include 'loginform.php';
}

}else { 

  include 'loginform.php';

}
ob_end_flush();
?>