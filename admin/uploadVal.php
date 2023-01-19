
<?php
ob_start();
 include "config.php";
 if(isset($_POST['title']))
 {	
    $_SESSION['error'] = '';
    $title = htmlspecialchars(trim($_POST['title']));
    $id = htmlspecialchars(trim($_POST['specialty']));
    $year = htmlspecialchars(trim($_POST['year']));
	$file='';
	$file_tmp='';
	$location="images/";
	$data='';
	 foreach($_FILES['images']['name'] as $key=>$val)
	{
	 $file=$_FILES['images']['name'][$key];
	 $file_tmp=$_FILES['images']['tmp_name'][$key];
	 $data .=$file." ";
	move_uploaded_file($file_tmp,$location.$file);
	 }
	$query="insert into upload (name, year, id_specialty, file) values(?,?,?,?)";
	$fire=$conn->prepare($query);
	if($fire->execute([$title, $year, $id, $data]))
	{
		header('Location: index.php?page=pdfs');
	}
	else
	{
		 $_SESSION['error']="Failed to upload file.";
               header('Location: index.php?page=uploads');
	}
 }else{
     header('Location: index.php?page=uploads');
     ob_end_flush();
 }
?>