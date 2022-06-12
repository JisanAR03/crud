<?php
$db = mysqli_connect('localhost','root','','student_info');
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>