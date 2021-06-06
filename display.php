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

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table class="table">
          <thead>
            <center>
              <h1>List of data entered:-</h1>
            </center>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">name</th>
              <th scope="col">Description</th>
              <th scope="col">file_name</th>
              <th scope="col">created_at</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
              <th scope="col"><a href="create.php"> <input type="button" class="btn btn-primary" value='Create new'> </a></td>
            </tr>
          </thead>

          <?php
          include "conn.php";
          $query = "select * from user";
          $result = mysqli_query($conn, $query);
          while ($res = mysqli_fetch_array($result)) {
          ?>
            <tbody>
              <tr>
                <td> <?php echo $res['id'] ?></td>
                <td> <?php echo $res['name'] ?></td>
                <td> <?php echo $res['description'] ?></td>
                <td> <?php echo $res['file_name'] ?></td>
                <td> <?php echo $res['created_at'] ?></td>
                <td><a href="update.php?id=<?php echo $res['id'] ?>"> <input type="button" class="btn btn-primary" value='Update'> </a></td>
                <td><a href="delete.php?id=<?php echo $res['id'] ?>"> <input type="button" class="btn btn-primary" value='Delete'> </a></td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
      <div>
      </div>

</body>

</html>