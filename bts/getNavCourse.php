<?php
include 'config.php';
$req = $conn->query('SELECT * FROM course WHERE options ="BTS"');
$req->execute();
while($data=$req->fetch()){?>
    <a href='http://localhost/gateways/bts/index.php?page=specialty&id=<?php echo $data['id']?>'><?php echo $data['name']?></a>
<?php }

?>