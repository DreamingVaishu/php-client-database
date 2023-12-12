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
        <form method="post" style="width: 500px;" >
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name" >
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingName" placeholder="example@gmail.com">
                <label for="floatingPassword">Gmail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingContact" placeholder="contact">
                <label for="floatingPassword">Contact</label>
            </div>

            <div class="d-grid">
               <button class="btn btn-primary mb-1" type="submit" >submit</button>
               <button class="btn btn-outline-primary" herf="/php-client-database/create.php" >cancle</button>

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