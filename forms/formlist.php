<?php require '../formRestriction/userChecking.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formlist</title>
    <style>
        body{
            background-color:#d1e8e2;
            font-family: 'Calibri'
        }

        h1{
            margin:auto;
            color:#116466;
            margin: 40px 10% 40px 10%;
            margin-top:100px;
        }

        a {
            text-decoration:none;
            color:black;
        }
        .options{
            font-size:1.5rem;
            text-align:center;
        }
        .options a{
            background-color:#116466;
            padding:10px 20px;
            color:#d1e8e2;
            border-radius:20px;
        }
    </style>
</head>
<body>
    <h1>Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.</h1>
    <br>
    <br>
    <div class="options">
    <a href="startupform.php">Startupform</a>
    <br>
    <br>
    <br>
    <a href="achievementform.php">Achievement Form</a>
    <br>
    <br>
    <br>
    <a href="highlight.php">News</a>
    <br>
    <br>
    <br>
    <a href="deletedata.php">Delete Data</a>
    <br>
    <br>
    <br>
    <br>
    <a href="../contact.xlsx" download> Download Contact form data </a> 
    <br>
    <br>
    <br>
    <br>
    
    <a href="../mentor.xlsx" download> Download Mentorship form data</a> 
    </div>
</body>
</html>

