<?php require '../formRestriction/userChecking.php';?>
<?php
// define variables and set to empty values
$startupname = $teamleader = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $startupname = test_input($_POST["startupname"]);
  $teamleader = test_input($_POST["teamleader"]);
  $date = test_input($_POST["date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

error_reporting(0);
require_once "../Classes/PHPExcel.php";
$excel= PHPExcel_IOFactory::load("../Start_up list(with contact details).xlsx");
//Get the first sheet in excel
$excel->setActiveSheetIndex(0);

$i = 1; 
while( $excel->getActiveSheet()->getCell('A'.$i) != ""){
$i++;
}

// insert value
$excel->getActiveSheet()->SetCellValue('A'.$i, $i);
$excel->getActiveSheet()->SetCellValue('B'.$i, $startupname);
$excel->getActiveSheet()->SetCellValue('C'.$i, $teamleader);
$excel->getActiveSheet()->SetCellValue('D'.$i, $date); 
// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("../Start_up list(with contact details).xlsx");
?>
<!-- Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
-->


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
<form class="form" style="margin-left:100px ; margin-top:100px ; " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <h1 >Add the startup name </h1>
      
    <input class="form-group" type="text" name="startupname" placeholder="Start-up Name" required><br>
    <input class="form-group" type="text" name= "teamleader" placeholder="Team Leader" required>
    
    <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Incubation Date</label>
        <input class="form-group" name="date" placeholder="MM/DD/YYY" type="text" required/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>

  </html>
