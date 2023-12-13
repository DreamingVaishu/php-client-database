<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpproject";

// creat a connection  
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("not connected" . mysqli_connect_error());
}



$NAME = "";
$EMAIL = "";
$CONTACT = "";

$errorMessage = "";
$succesMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NAME = $_POST["name"];
    $EMAIL = $_POST["email"];
    $CONTACT = $_POST["contact"];

    do {
        if (empty($NAME) || empty($EMAIL)) {
            $errorMessage = "you have to provide name and email";
            break;
        }

        $sql = " INSERT INTO client (NAME , EMAIL , CONTACT ) " .
        " VALUES ('$NAME' , '$EMAIL', '$CONTACT') ";
        $results = $connection->query($sql);

        if (!$results ) {
            $errorMessage = "invalid query" . $connection->error ;
            break;
        }


        $NAME = "";
        $EMAIL = "";
        $CONTACT = "";

        $succesMessage = "client added correctly";

        header("location : /php-client-database/index.php");
        exit;


    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create new</title>
</head>

<body>

    <div class="container my-5">
        <h5>
            New client
        </h5>
        <br>

        <?php
        if (!empty($errorMessage)) {
            echo "$errorMessage";
        }
        ?>
        <form method="post" style="width: 500px;">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" value="<?php echo $NAME; ?>">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" value="<?php echo $EMAIL; ?>">
                <label for="floatingName">Gmail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="contact" value="<?php echo $CONTACT; ?>">
                <label for="floatingContact">Contact</label>
            </div>

            <?php
            if (!empty($succesMessage)) {
                echo "added";
            }
            ?>
            <br>

            <div class="d-grid">
                <button class="btn btn-primary mb-1" herf="/php-client-database/index.php" type="submit">submit</button>
                <a class="btn btn-outline-primary" herf="/php-client-database/index.php">cancle</a>

            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>