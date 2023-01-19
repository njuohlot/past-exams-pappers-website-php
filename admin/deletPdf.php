<?php
if(isset($_GET['id'])) {
    $_SESSION['pdf'] = '';
    $id = $_GET['id'];
    $user = $_SESSION['login'];
    include 'config.php';
      $query = $conn->prepare('SELECT admin_type FROM `admin` WHERE admin_name=?');
      $query->execute([$user]);
      $data=$query->fetch();
      if($data['admin_type'] === 'superAdmin'){
        $sql = $conn->prepare('DELETE FROM `upload` WHERE id=?');
       $sql->execute([$id]);
        $_SESSION['pdf'] = '';
        header('Location: index.php?page=pdfs');
      }else{
        $_SESSION['course'] = 'Oops, Current Admin cannot delete pdf';
        header("Location: index.php?page=pdfs");
      }
     }



?>