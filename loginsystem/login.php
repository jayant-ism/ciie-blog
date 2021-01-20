<?php
if(isset($_POST['Submit'])){
    
    include '_dbconnect.php';
    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['username']) ? $_POST['username'] : '';
    $Password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
    
    $sql = "SELECT * FROM user where username='$Username' AND password='$Password1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $Username;
        header("location: home.php");
    }
    else{
        echo "invalid Cred";
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

    <title>LOGIN</title>
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
        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  </form>
  <h1><a href="signup.php">Click here to signup</a></h1>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>