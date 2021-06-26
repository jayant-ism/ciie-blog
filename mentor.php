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







// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("mentor.xlsx");
// define variables and set to empty values

?>
<!-- Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentorship and Funding-CIIE</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/7677280783.js"></script>
    

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/require.css">
    
    
</head>
<body>
<?php require 'require/header.php';?>

<?php require 'require/nav.php';?>

<main class="container">

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
                <label for="name">Name<span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control" id="name" required="">
            </div>


            <div class="form-group">
                <label for="orgname">Organisation Name</label>
                <input type="text" name="orgname" class="form-control" id="orgname">
            </div>
            
            
            <div class="form-group">
                <label for="Designation">Designation</label>
                <input type="text" name="Designation" class="form-control" id="Designation">
            </div>

            
            <div class="form-group">
                <label for="email"> Email id<span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control" id="email" required="">
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
                    <option value="Mentoring" selected>Mentoring</option>
                    <option value="Funding">Funding</option>
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


    <div class="containrr">
    

        <?php require 'require/footer.php';?>

    </div>


    <style>


.brands {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  grid-gap: 1rem;
  list-style-type: none;

}

.brands__item img {

  width: 130px;
  height: 75px;
  object-fit: contain;
  mix-blend-mode: multiply;
}





.brands__item img {
  display: block;
  /* Make sure max-width is added */
  max-width: 100%;
}


            .card {
 
 transition: 0.6s;
 border-radius: 5%;
 width: 100%;
 margin: 0 auto;
}




.img_slider{
  background-color:white ;
    width: 100%;
}


.container {
 padding: 16px;
 
}
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides{display: none;}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }
        
        /* Caption text */
        .text {
          color: black;

          margin: 0 auto;
          
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
          margin-bottom: 30px;
        }
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 5.0s;
          animation-name: fade;
          animation-duration: 5.0s;
        }
        
        @keyframes fade {
   0% {
      opacity: 0;
      transform: translateX(-50%);
      border-radius: 0%;
   }
   50% {
      opacity: 1;
      transform: translateX(0);

      
   }
   100% {
      opacity: 0;
      transform: translateX(50%);
      border-radius: 0%;
      
   }
} 
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 600px) {
          .text {font-size: 11px}
          .mySlides{
              width:100%;
          }
          .card{
            width: 70%;
          }
        }
        </style>
    
</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death  
--> 
