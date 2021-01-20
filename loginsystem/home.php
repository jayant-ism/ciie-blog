<?php require 'check.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    <h1>HELLO <?php echo $_SESSION['username'] ?></h1>
    <h2><a href="logout.php">log out</a></h2>
    <h1><a href="reset.php">Click here to reset ur password</a></h1>
</body>
</html>