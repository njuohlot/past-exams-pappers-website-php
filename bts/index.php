<?php
session_start();
ob_start();
include 'header.html';
include 'nav.php';
if(isset($_GET['page'])) {
$page = $_GET['page'];
if(file_exists($page.'.html')){
include $page.'.html';
}else if(file_exists($page.'.php')){
  include $page.'.php';
}else{
  include 'home.php';
}
}else{

  include 'home.php';

}
?>
<?php include 'footer.php'?>
</body>
</html>