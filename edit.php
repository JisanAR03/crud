<?php
require_once 'conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM trys WHERE id='$id'";
$result = $db->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $data['id'];?>">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" class="form-control" value="<?php echo $data['email']?>">
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <input type="text" name="number" class="form-control" value="<?php echo $data['number']?>">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>