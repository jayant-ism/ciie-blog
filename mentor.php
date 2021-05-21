<?php
require_once "Classes/PHPExcel.php";




$startupname = $teamleader = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = ($_POST["email"]);
  $name = ($_POST["name"]);
  $title = ($_POST["title"]);
  $detail =  ($_POST["textfield"]);
  $designation = ($_POST["Designation"]);
  $orgname =($_POST["orgname"]);
  $organisation_type = ($_POST["organisation_size"]);
}


error_reporting(0);
$excel= PHPExcel_IOFactory::load("mentor.xlsx");
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
$excel->getActiveSheet()->SetCellValue('D'.$i, $title); 
$excel->getActiveSheet()->SetCellValue('E'.$i, $detail); 
$excel->getActiveSheet()->SetCellValue('F'.$i, $designation);
$excel->getActiveSheet()->SetCellValue('G'.$i, $orgname);
$excel->getActiveSheet()->SetCellValue('H'.$i, $organisation_type);







// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("mentor.xlsx");
// define variables and set to empty values

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
   
    <script src="https://use.fontawesome.com/7677280783.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contact.css">

    


    

</head>
<body>

<?php require 'require/header.php';?>

<?php require 'require/nav.php';?>




<div class="container">


<main>

<h1 style="font-size:30px ; margin-top:100px ;">  Interested in Mentoring or Funding the Startups? <br>
 Share your details and we will get in touch. </h1>
    <div class="conatiner" style="margin-top:50px ; margin-bottom: 100px ;" >



        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
            <!-- 
            <div class="form-group">
                <label for="Organisation_type"> Organisation type:</label>
                <select id="Organisation_type" name="cars">
                    <option value="Medium and Small Business">Medium and Small Business </option>
                    <option value="Startup">Startup </option>
                    <option value="Others">Others</option>
                </select>
            </div>
            -->

            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>


            <div class="form-group">
                <label for="orgname">Organisation Name:</label>
                <input type="text" name="orgname" class="form-control" id="orgname">
            </div>
            
            
            <div class="form-group">
                <label for="Designation">Designation</label>
                <input type="text" name="Designation" class="form-control" id="Designation">
            </div>

            
            <div class="form-group">
                <label for="email"> Email id:</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>


            
            <!--
            <div class="form-group">
                <label for="organisation_size"> Organisation size:</label>
                <input type="organisation_size" name="organisation_size" class="form-control" id="organisation_size">
            </div>
            -->
            
            <div class="form-group">
                <label for="title">Interested in Mentoring/Funding</label>
                <select id="title" name="title">
                    <option value="" selected>Mentoring</option>
                    <option value="25-100">Funding</option>
                    <option value="both">Both</option>
                </select>

             </div>

            <div class="form-group">
                <label for="email">Comments</label>
                <textarea row=20 name="textfield" id="textfield" class="form-control"> </textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
</main>
</div>


<style >
.footer_info{
  background-color : black ; 
}
</style>


<?php require 'require/footer.php';?>  


</body>

  </html>
