<?php
if(isset($_GET['id'])) {
    $_SESSION['users'] = '';
    $id = $_GET['id'];
    $user = $_SESSION['login'];
    include 'config.php';
      $query = $conn->prepare('SELECT admin_type FROM `admin` WHERE admin_name=?');
      $query->execute([$user]);
      $data=$query->fetch();
      if($data['admin_type'] === 'superAdmin'){
        $sql = $conn->prepare('DELETE FROM `user` WHERE id=?');
       $sql->execute([$id]);
        $_SESSION['users'] = 'User deleted';
        header('Location: index.php?page=user');
      }else{
        $_SESSION['users'] = 'Oops, Current Admin cannot delete user';
        header("Location: index.php?page=user");
      }
     }
