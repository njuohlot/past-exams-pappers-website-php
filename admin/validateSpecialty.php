<?php
ob_start();
include 'config.php';
if(isset($_POST['name'])){
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $course = $_POST['course'];
   $image = $_FILES['file']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['file']['size'];
   $image_tmp_name = $_FILES['file']['tmp_name'];
   $image_folder = 'uploads_specialty/'.$image;
     $extension = pathinfo($image, PATHINFO_EXTENSION);
   $select_papers = $conn->prepare("SELECT * FROM `specialty` WHERE name = ?");
   $select_papers->execute([$name]);
   if($select_papers->rowCount() > 0){
       $_SESSION['error_s']="Specialty already exist.";
       header('Location: index.php?page=newSpecialty');
   }else{
      $insert_papers = $conn->prepare("INSERT INTO `specialty`(id_course, name,  file) VALUES(?,?,?)");
      $insert_papers->execute([$course, $name, $image]);
      if($insert_papers){
         if($image_size > 2000000){
           $_SESSION['error_s']="file too large.";
               header("Location: index.php?page=specialty");
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
             $_SESSION['error_s']="";
               header("Location: index.php?page=specialty");
         }
      }
   }
};
ob_end_flush();