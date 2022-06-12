<?php

require_once 'conn.php';

$id = $_POST['id'] ;

$sql = "DELETE FROM trys WHERE id='$id'";
$result = $db->query($sql);

if($result)
    header('Location:index.php');
?>