<?php
// define variables and set to empty values
$email = $name = $subject = $details = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $startupname = test_input($_POST["email"]);
  $teamleader = test_input($_POST["name"]);
  $date = test_input($_POST["subject"]);
  $date = test_input($_POST["details"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

error_reporting(0);
require_once "Classes/PHPExcel.php";
$excel= PHPExcel_IOFactory::load("contact.xlsx");
//Get the first sheet in excel
$excel->setActiveSheetIndex(0);

$i = 1; 
while( $excel->getActiveSheet()->getCell('A'.$i) != ""){
$i++;
}

// insert value
$excel->getActiveSheet()->SetCellValue('A'.$i, $i);
$excel->getActiveSheet()->SetCellValue('B'.$i, $email);
$excel->getActiveSheet()->SetCellValue('C'.$i, $name);
$excel->getActiveSheet()->SetCellValue('D'.$i, $subject);
$excel->getActiveSheet()->SetCellValue('E'.$i, $details); 
// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("contact.xlsx");
?>
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name ="email" id="email">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name ="name" id="name">
              </div>
              <div class="form-group">
                <label for="title">Subject</label>
                <input type="text" class="form-control" name ="subject" id="title">
              </div>
              <div class="form-group">
                <label for="email">Details</label>
                <textarea row=20 class="form-control" name ="details"> </textarea>
              </div>
            </form>
  
  
  
  
  
  
  
  
  
  
  
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