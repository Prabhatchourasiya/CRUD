<?php
include "conn.php";
if (count($_POST) != 0) {
    extract($_POST);
    foreach ($_FILES['file']['name'] as $key => $val) {
        $random = rand('1111', '9999');
        $file = $random . '_' . $val;
        move_uploaded_file($_FILES['file']['tmp_name'][$key], 'uploadedimages/' . $file);
        $query = "insert into user set name='$name', description='$description', file_name='$file'";
        $result = mysqli_query($conn, $query);
        if ($result == true) {
            // echo "record inserted successfully";
        } else {
            echo "record not inserted";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <form class="container" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <center>
                <h1>Create Form</h1>
            <center>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter Description"></textarea>
        </div>
        <div class="mb-3">
            <input type="file" name="file[]" class="form-control" multiple />
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="display.php"> <input type="button" class="btn btn-primary" value='View List'> </a>
        </div>
    </form>

</body>

</html>