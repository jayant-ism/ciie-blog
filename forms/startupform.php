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
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <input class="form-control" type="text" name="startupname" placeholder="Start-up Name" required><br>
    <input class="form-control" type="text" name= "teamleader" placeholder="Team Leader" required>
    
    <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Incubation Date</label>
        <input class="form-control" name="date" placeholder="MM/DD/YYY" type="text" required/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>