<?php
require_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Image</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
    .imgs {
        width: 250px;
        height: 250px;
    }
</style>
<body class="d-flex justify-content-center align-items-center flex-wrap min-vh-100">
    <a href="index.php" class="fs-4 p-2 text-decoration-none text-dark">&#8617;</a>
    <?php 
        $sql = "SELECT * FROM img_url ORDER BY id DESC";
        $result = mysqli_query($db,  $sql);

        if (mysqli_num_rows($result) > 0) {
        while ($images = mysqli_fetch_assoc($result)) {  ?>
            
            <div class="imgs p-4">
            <img class="w-100 h-100 img-fluid img-thumbnail" src="uploads/<?=$images['img_url']?>">
            </div>
    <?php } }?>
</body>
</html>