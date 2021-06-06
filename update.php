<?php
include "conn.php";
if (count($_POST) != 0) {
  extract($_POST);
  extract($_GET);
  $query = " UPDATE user SET name='$name', description='$description' WHERE id='$id' ";
  $result = mysqli_query($conn, $query);
  if ($result == true) {
    //echo "record updated successfully";
  } else {
    echo "record not updated";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <form class="container" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <center>
        <h1>Update Form</h1>
      </center>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter Description"></textarea>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="display.php"> <input type="button" class="btn btn-primary" value='View list'> </a>
    </div>
  </form>

</body>

</html>