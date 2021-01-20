<?php
if(isset($_POST['Submit'])){
    
    include '_dbconnect.php';
    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['username']) ? $_POST['username'] : '';
    $Password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
    $Password2 = isset($_POST['password2']) ? $_POST['password2'] : '';
    if(($Password1 == $Password2) && !($Password1 == '')){
        $sql = "INSERT INTO `user` (`username`, `password`, `date`) VALUES ('$Username','$Password1',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "signup successfuly";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $Username;
            header("location: home.php");
        }
        else{
            echo "username already exist".$result;
        }
    }
    else{
        echo "password do not match";
    }
}
    
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name = "username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password1" name="password1">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="Password2" name="password2">
        </div>
        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  </form>
  <h1><a href="login.php">Already have an account! LOGIN IN </a></h1>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>