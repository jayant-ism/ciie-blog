<?php require '../formRestriction/userChecking.php';?>
<?php
// define variables and set to empty values
$title = $name = $description = $imgurl= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $name = test_input($_POST["name"]);
  $description = test_input($_POST["description"]);
  $imgurl = test_input($_POST["imgurl"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

error_reporting(0);
require_once "../Classes/PHPExcel.php";
$excel= PHPExcel_IOFactory::load("../achievementdata.xlsx");
//Get the first sheet in excel
$excel->setActiveSheetIndex(0);

$i = 1; 
while( $excel->getActiveSheet()->getCell('A'.$i) != ""){
$i++;
}

// insert value
$excel->getActiveSheet()->SetCellValue('A'.$i, $i);
$excel->getActiveSheet()->SetCellValue('B'.$i, $title);
$excel->getActiveSheet()->SetCellValue('C'.$i, $name);
$excel->getActiveSheet()->SetCellValue('D'.$i, $description);
$excel->getActiveSheet()->SetCellValue('D'.$i, $imgurl); 
// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("../achievementdata.xlsx");
?>
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.



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
    
    <input class="form-control" type="text" name="title" placeholder="Title" required><br>
    <input class="form-control" type="text" name= "name" placeholder="Name" required><br>
    <textarea class="form-control" name= "description" placeholder="description" rows="3" required></textarea><br>
    <input class="form-control" type="text" name= "imgurl" placeholder="imgurl" required><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


</div>


</body>

  </html>



