<?php 

require 'db.php';

$id = 3;
$sql = "DELETE FROM users WHERE id='$id'";
$res = mysqli_query($conn, $sql);
echo $res ? 'Deleted successfully.' : 'Deleting fail.';