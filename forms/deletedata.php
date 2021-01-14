<?php require '../formRestriction/userChecking.php';?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  }

?>

<html>
  <head>
  <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changes-ciie</title>

</head>
<body>

<div class="container">


<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    
    <button type="submit" class="btn btn-primary" name="delete">delete</button>
</form>

</div>

</body>

  </html>


