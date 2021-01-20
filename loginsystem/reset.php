<?php require 'check.php' ?>

<?php
if(isset($_POST['Submit'])){
    
    include '_dbconnect.php';
    $Username = $_SESSION['username'];
    /* Check and assign submitted Username and Password to new variable */
    $Password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
    $Password2 = isset($_POST['password2']) ? $_POST['password2'] : '';
    $Password3 = isset($_POST['password3']) ? $_POST['password3'] : '';
    echo $Username;
    $sql1 = "SELECT * FROM user where username='$Username' AND password='$Password1'";
    $result1 = mysqli_query($conn, $sql1);
    $num = mysqli_num_rows($result1);
    if($num == 1){
        if(($Password2 == $Password3) && !($Password1 == '')){
            $sql = "UPDATE `user` SET `password` = '$Password2' WHERE `user`.`username` = '$Username'";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "password changed";
                header("location: home.php");
            }
        }
        else{
            echo "password do not match";
        }
    }
    else{
        echo "Wrong Password";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>reset</title>
</head>
<body>
    <h1>HELLO <?php echo $_SESSION['username'] ?></h1>
    <h2><a href="logout.php">log out</a></h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="mb-3">
            <label for="Password" class="form-label">Enter UR Correct Password</label>
            <input type="password" class="form-control" id="Password1" name="password1">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Enter new Password</label>
            <input type="password" class="form-control" id="Password2" name="password2">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="Password3" name="password3">
        </div>
        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  </form>

</body>
</html>