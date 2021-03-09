<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home-ciie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/csr_funds.css">

    <link rel="stylesheet" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/7677280783.js"></script>
    
</head>
<body>
    <div class="containrr">
        <?php require 'require/header.php';?>

        <?php require 'require/nav.php';?>

        <main>
            




            <div class="container borders">
                <h1> List of startups incubated </h1>
                
            </div>

            <div class="container">
            
            <table>
                <tr>
                  <th>S. NO.</th>
                  <th>Start-up Name</th>
                  <th>Team Leader</th>
                  <th>Incubation Date</th>
                </tr>

                <?php
                        error_reporting(0);
                        require_once "Classes/PHPExcel.php";
                        
                        $excel= PHPExcel_IOFactory::load("Start_up list(with contact details).xlsx");
                        
                        
                        //Get the first sheet in excel
                        $excel->setActiveSheetIndex(0);
                        
                        //first row of data
                        $i = 2; 
                        while( $excel->getActiveSheet()->getCell('A'.$i) != ""){
                            // get cell data
                            $id = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
                            $startupname = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
                            $teamleader = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
                            $incubationdate = $excel->getActiveSheet()->getCell('D'.$i)->getValue();                            
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$startupname</td>";
                            echo "<td>$teamleader</td>";
                            echo "<td>$incubationdate</td>";
                            echo "</tr>";
                            $i++;
                        }
                        		
                       
                ?>
            </table>

            </div>












        </main>
                




        <?php require 'require/footer.php';?>

    </div>





    <style>
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
