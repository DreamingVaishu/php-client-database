<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>client</title>
</head>

<body>

  <div class="container">
    <br>
    <br>
    <h1>Clients</h1>
    <a class="btn btn-primary" href="/php-client-database/create.php">add client</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>CONTACT</th>
          <th>CREATED AT</th>
          <th>ACTIONS</th>
        </tr>
      </thead>

      <!-- connection port  -->
      <?php

      // connecting the database 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "phpproject";

      // creat a connection  
      $connection = mysqli_connect($servername, $username, $password, $database);

      if (!$connection) {
        die("not connected" . mysqli_connect_error());
      }

      $sql = "SELECT * FROM client";
      $results = $connection->query($sql);

      if (!$results) {
        die("invalid query" . $connection->error);

      }


      while ($row = $results->fetch_assoc())
        echo "
     <tr>
        <td>$row[id]</td>
        <td>$row[NAME]</td>
        <td>$row[EMAIL]</td>
        <td>$row[CONTACT]</td>
        <td>$row[created_at]</td>
        <td>

          <a class='btn btn-primary btn-sm' href='/PhpProject/edit.php?id=$row[id]'>edit</a>
          <a class='btn btn-danger btn-sm' href='/PhpProject/delete.php?id=$row[id]'>delete</a>
        </td>
      </tr>
  ";
      ?>

    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>