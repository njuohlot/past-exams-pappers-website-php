<?php
ob_start();
include 'config.php';
if(isset($_POST['title'])){
   $name = $_POST['title'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $option = $_POST['course'];
   $option = filter_var($option, FILTER_SANITIZE_STRING);
   $image = $_FILES['file']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['file']['size'];
   $image_tmp_name = $_FILES['file']['tmp_name'];
   $image_folder = 'uploads_course/'.$image;
     $extension = pathinfo($image, PATHINFO_EXTENSION);
   $select_papers = $conn->prepare("SELECT * FROM `course` WHERE name = ?");
   $select_papers->execute([$name]);
   if($select_papers->rowCount() > 0){
       $_SESSION['error_c']="Course already exist.";
       header('Location: index.php?page=newCourse');
   }else{
      $insert_papers = $conn->prepare("INSERT INTO `course`(name, options, images) VALUES(?,?,?)");
      $insert_papers->execute([$name, $option, $image]);
      if($insert_papers){
         if($image_size > 2000000){
           $_SESSION['error_c']="file too large.";
               header("Location: index.php?page=newCourse");
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
             $_SESSION['error_c']="";
               header("Location: index.php?page=course");
         }
      }
   }
};
ob_end_flush();