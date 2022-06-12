<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 180px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix d-flex">
                        <h2 class="float-left me-5">Employees Details</h2>
                        <a href="create.php" class="btn btn-success float-right ms-5 px-4">Add New Employee</a>
                    </div>
                    <div class="d-flex">
                        <a id="load_btn" class="btn px-4 btn-secondary btn-outline-info m-auto my-2">Load Data</a>
                        <a class="btn px-4 btn-secondary btn-outline-info m-auto my-2 float-end" href="img_upload.php">click here for upload image</a>
                        <a class="btn px-4 btn-secondary btn-outline-info m-auto my-2 float-end" href="img_view.php">Image view</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_body"></tbody>
                    </table>                
                </div>
            </div>        
        </div>
    </div>
    <script src="ajax.js"></script>
</body>
</html>