<?php 

require 'db.php';

// select
$sql = "SELECT * FROM users";
$res = mysqli_query($conn, $sql);

while($users = mysqli_fetch_assoc($res)) {
    echo $users['id'] . '<br>';
    echo $users['name'] . '<br>';
    echo $users['date'] . '<br>';
    echo "<br><br>";
}

/* echo '<pre>';
print_r($users);
echo '<pre>';
 */



