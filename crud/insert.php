<?php 

require '../db.php';

$name = 'myamya';
$pass = '123';
$sql = "INSERT INTO users (name, pass) VALUES ('$name', '$pass')";
$res = mysqli_query($conn, $sql);

/* if($res) {
    echo 'Inserted successfully.';
} else {
    echo 'Inserting fail.';
} */

echo $res ? 'Inserted successfully.' : 'Inserting fail.';