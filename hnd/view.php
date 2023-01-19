
<?php
ob_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include 'config.php';
    $i="";
$sql = $conn->prepare('SELECT file FROM upload WHERE id=?');
$sql->execute([$id]);
$data = $sql->fetch();
$res = $data['file'];
$res=explode(" ",$res);
$count=count($res)-1;
for($i=0;$i<$count;++$i)
{?>
    <div class='display'>
    <img src="http://localhost/gateways/admin/images/<?= $res[$i]?>" height="100%" width="80%"/>
    </div>
	<?php }
    }else{
        header('Location: http://localhost/gateways/hnd/index.php?page=display');
        ob_end_flush();
    }
 ?>
 <style>
    .display{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-direction: center;
        margin-top: 70px;
        
    }
</style>
 
