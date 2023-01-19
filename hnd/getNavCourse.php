<?php
include 'config.php';
$req = $conn->query('SELECT * FROM course WHERE options = "HND"');
$req->execute();
while($data=$req->fetch()){?>
    <a href='http://localhost/gateways/hnd/index.php?page=specialty&id=<?php echo $data['id']?>'><?php echo $data['name']?></a>
<?php }

?>