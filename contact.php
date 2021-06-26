<?php
// define variables and set to empty values
$startupname = $teamleader = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = ($_POST["email"]);
  $name = ($_POST["name"]);
  $detail =  ($_POST["textfield"]);
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
$excel->getActiveSheet()->SetCellValue('D'.$i, $detail); 





// saving
$writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
$writer->save("contact.xlsx");
?>
<!-- Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us-CIIE</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/7677280783.js"></script>
    

    
    <link rel="stylesheet" href="css/contact.css">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/require.css">
    <link rel="stylesheet" href="css/nav-footer.css">
    
    
</head>
<body>
<?php require 'require/header.php';?>

<?php require 'require/nav.php';?>


<main class="container">

<h1 style="font-size:30px ; margin-top:100px ;"> Wish to contact us? <br> Share your details and we will get in touch </h1>
    <div class="conatiner" style="margin-top:50px ; margin-bottom: 100px ;" >



        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
            



            <div class="form-group">
                <label for="name">Name<span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            
            
            <div class="form-group">
                <label for="email"> Email id<span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="email">Details</label>
                <textarea row=20 name="textfield" id="textfield" class="form-control"> </textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
</main>
</div>



<div class="faq">
                <div class="faq_head">
                    <p>FREQUENTLY ASKED QUESTIONS ?</p>
                </div>



                <div style="background-color: #d1ead2; color: #116466; padding-top: 30px;">
                <p style=" margin-left: 5%;">1.	How do incubators help startups ?<span style="margin-right: 2%;"></span><button class="collapse_btn" data-toggle="collapse" data-target="#demo">Answer</button></p>
                <div id="demo" class="collapse" style="background-color: #d1ead2; margin-left: 5%;">
                    <p>Infrastructure Support:</p> 
                    <p>Credibility:</p>
                    <p>Funding:</p> 
                    <p>Mentoring:</p>
                    <p>Peer knowledge sharing:</p> 
                    <p>Transport:</p>
                </div>
            </div>





            <div style="background-color: #d1ead2; color: #116466;  padding-top: 30px;">
                <p style="margin-left: 5%;">2. How helpful are startup incubators? <span style="margin-right: 2%;"></span><button class="collapse_btn"  data-toggle="collapse" data-target="#demo2">Answer</button></p>
                <div id="demo2" class="collapse" style="background-color: #d1ead2; margin-left: 5%;">
                    An incubator is set up to reduce the chances of failure of early-stage startups and it helps in the economic viability and growth of startups that it supports. Therefore, incubators are set up to create sustainable and strong entrepreneurial support infrastructure and enable young innovators and entrepreneurs to find the necessary support and resources to build successful startups.
                    
                </div>
            </div>



            <div style="background-color: #d1ead2; color: #116466;  padding-top: 30px;">
                <p style="margin-left: 5%;">3. When is a startup / idea ready for an incubator?<span style="margin-right: 2%;"></span><button class="collapse_btn" data-toggle="collapse" data-target="#demo3">Answer</button></p>
                <div id="demo3" class="collapse" style="background-color: #d1ead2; margin-left: 5%;">
                    
                    A startup can connect with incubators even at the Idea Stage or Execution Stage. If you are at the Idea stage then an incubator can help you validate your idea or can help you come up with a Minimum Viable Product (MVP). Even help you to build a Business & Financial Model. An Idea is the first the main step is execution, not only the execution but the right execution is needed. The Startup at the Execution stage can get a lot of help from Incubators in terms of connection, Building Sales Funnel Raising Funds.
                </div>
            </div>





            <div style="background-color: #d1ead2; color: #116466;  padding-top: 30px;">
                <p style=" margin-left: 5%;">4. Do I need to have a working product to apply for funding from CIIE <span style="margin-right: 2%;"></span><button class="collapse_btn"  data-toggle="collapse" data-target="#demo5">Answer</button></p>
                <div id="demo5" class="collapse" style="background-color: #d1ead2; margin-left: 5%;">
                    No, applicant would be required to fill in an application form and furnish details about their enterprise or idea alongwith justification on how they were working /planning to work towards innovation, development or improvement of products or processes or services that would translate into a scalable business model with a high potential of employment generation or wealth creation.
                </div>
            </div>







            <div style="background-color: #d1ead2; color: #116466;  padding-top: 30px; padding-bottom: 30px;">
                <p style="margin-left: 5%;">5. What does incubation mean in a startup?<span style="margin-right: 2%;"></span> <button class="collapse_btn" data-toggle="collapse" data-target="#demo4">Answer</button></p>
                <div id="demo4" class="collapse" style="background-color: #d1ead2; margin-left: 5%;">
                    In the startup world , when you start an entrepreneurship journey you need an incubator where the experts will mentor you in the entrepreneurship journey so that you are healthy enough to scale in the business world & be succesful Or in other words, it is a helping hand to get you on your feet.
                    
                </div>
            </div>



            </div>








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
