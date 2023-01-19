<?php
include 'config.php';

$query = $conn->query('SELECT * FROM `specialty`');

while($data = $query->fetch()){?>
<option value='<?php echo $data['id']?>'><?php echo $data['name']?></option>

<?php }




?>