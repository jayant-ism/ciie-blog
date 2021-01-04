<?php require '../formRestriction/userChecking.php';?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    
    <button type="submit" class="btn btn-primary" name="delete">delete</button>
</form>