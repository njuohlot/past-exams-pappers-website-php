<?php
include 'config.php';

$query = $conn->query('SELECT * FROM `course`');

while($data = $query->fetch()){?>
<option value='<?php echo $data['id']?>'><?php echo $data['name']?></option>

<?php }




?>