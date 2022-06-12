<?php

require_once 'conn.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$number     = ($_POST['number']) ;

if (strlen($name) > 4 && strlen($email) > 8 && strlen($number) > 10) {
    $sql = " INSERT INTO trys(name,email,number) VALUES('$name','$email','$number')";
    if ($db->query($sql) === TRUE) {
        header('Location:index.php');
    } else {
        echo "probably an error in the database";
    }
} else {
    echo 'Plz use a valid data';
}