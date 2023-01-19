<?php
ob_start();
if(isset($_GET['id'])) {
    $_SESSION['specialty'] = '';
    $id = $_GET['id'];
    $user = $_SESSION['login'];
    include 'config.php';
      $query = $conn->prepare('SELECT admin_type FROM `admin` WHERE admin_name=?');
      $query->execute([$user]);
      $data=$query->fetch();
      if($data['admin_type'] === 'superAdmin'){
        $sql = $conn->prepare('DELETE FROM `specialty` WHERE id=?');
       $sql->execute([$id]);
        $_SESSION['specialty'] = '';
        header('Location: index.php?page=specialty');
      }else{
        $_SESSION['course'] = 'Oops, Current Admin cannot delete course';
        header("Location: index.php?page=specialty");
      }
      ob_end_flush();
     }
