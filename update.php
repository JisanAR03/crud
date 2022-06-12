<?php

require_once 'conn.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$email      = $_POST['email'];
$number     = $_POST['number'] ;


if (strlen($name) > 4 && strlen($email) > 8 && strlen($number) > 10) {
    $sql = "UPDATE trys SET name='$name', email='$email',number = '$number' WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header('Location:index.php');
    } else {
        echo "probably an error in the database";
    }
} else {
    echo 'Data update fail!';
}
// $sql = "UPDATE trys SET name='$name', email='$email',number = '$number' WHERE id='$id'";
// $result = $db->query($sql);

// if($result)
// {
//     header('Location:index.php');
// }
// else{
//     echo 'Data update fail!';
// }
