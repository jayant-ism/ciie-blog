<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://use.fontawesome.com/7677280783.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php require 'require/header.php';?>

<?php require 'require/nav.php';?>


<div class="container">

        <main>

        <h1 style="font-size:30px ; margin-top:100px ;"> Submit your query here </h1>
            <div class="conatiner" style="margin-top:50px ; margin-bottom: 100px ;" >
            <form action="/action_page.php"> 
            <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="title">Subject</label>
    <input type="text" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="email">Details</label>
    <textarea row=20 class="form-control"> </textarea>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

            </div>

        </main>

    </div>

    <?php require 'require/footer.php';?>    

</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death  
-->