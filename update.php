<?php 

require 'db.php';

$name = 'bobo';
$sql = "UPDATE users SET name='$name' WHERE id=2";
$res = mysqli_query($conn, $sql);
echo $res ? 'Updated successfully.' : 'Updating fail.';