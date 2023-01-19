<?php
ob_start();
include 'config.php';
if(isset($_GET['id'])){
  $id = $_GET['id'];
$query = $conn->prepare('SELECT name FROM `course` WHERE id=?');
$query->execute([$id]);
while($data=$query->fetch()){?>
<h1 class="mt-100" style="color: wheat; font-weight: 800; font-size: 34px;"><?php echo $data['name']?></h1>
<?php }
}else{
  header('Location: http://localhost/gateways/bts/index.php');
}
ob_end_flush();

?>