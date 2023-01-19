
<?php
if(isset($_GET['language'])){
    $language = $_GET['language'];
    if($language == 1) {
        include 'hnd/index.php';
    }else{
       include 'bts/index.php' ;
    }
}else{
    include 'hnd/index.php';
}
