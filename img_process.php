<?php
if (isset($_POST['submit']) && isset($_FILES['image'])) {
	include "conn.php";

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$img_tmp = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	if ($error === 0) {
		if ($img_size > 1000000) {
		$em = "please upload image less than 100000 kb";
		header("Location: error.php?error=$em");
		}else {
			$img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_low_ext = strtolower($img_ext);

			$allowed_ext = array("jpg", "jpeg", "png"); 

			if (in_array($img_low_ext, $allowed_ext)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ext;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($img_tmp, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO `img_url` ( `img_url`) VALUES ('$new_img_name')";
				mysqli_query($db, $sql);
				header("Location: index.php");
			}else {
			$em = "Your file is not an image";
		header("Location: error.php?error=$em");
		}
		}
	}else {
		$em = "undfinded error";
		header("Location: error.php?error=$em");
	}

}else {
    $em = "madachud er error";
	header("Location: error.php?error=$em");
}
?>