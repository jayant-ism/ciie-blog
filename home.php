<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home-ciie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
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
            
            <div class="achieve_trophy ">
            </div>
            <div class="container">
            <div >
                <h1> About CIIE</h1>
                <hr style="border-top: 1px solid rgb(107, 103, 103); ">
                <p style=" text-align: justify; text-justify: inter-word;">Centre for Innovation, Incubation and Entrepreneurship (CIIE) is a Not-for-Profit Centre at the Indian Institute of Technology (Indian School of Mines) Dhanbad. The centre is dedicated to promoting innovation and entrepreneurship within the institute and in society at large. The goal of CIIE is to promote start-ups and entrepreneurship as a viable career option and as means to making a social and strategic impact. </div>
            
            </div>

            

          <div class="container">
          <div class="w3-content w3-section" style="max-width:800px aligh:center">
          <img class="mySlides" src="images/sampleimage.jpg" alt="Ciee" style="width:100%; height: 360px; border-radius: 5%;">
          <img class="mySlides" src="images/trophy.jpeg" alt="Ciee" style="width:100%; height: 360px; border-radius: 5%;">
          <img class="mySlides" src="images/members.jpeg" alt="Ciee" style="width:100%; height: 360px; border-radius: 5%;">
                       
          </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

          </div>






        



          <!-- 
            -->





    



            
            

<!--


            <div class="img_slider" style="margin-top: 100px;" >
                
                <div class="slideshow-container" style="padding-top: 50px;">
                
                <div class="mySlides fade" >
                  
                  <div class="card" >
                    <img class="fade" src="images/sampleimage.jpg" alt="Ciee" style="width:100%; height: 360px; border-radius: 5%;">
                    <div class="container">
                        <div class="text"><p>Caption One</p></div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="mySlides fade ">
                  
                  <div  class="card" >
                    <img class="fade" src="images/trophy.jpeg" alt="Ciee" style="width:100%; height: 360px;  border-radius: 5%;">
                    <div class="container">
                        <div class="text" ><p>Caption Two</p></div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="mySlides fade ">
                  
                  <div class="card" >
                    <img class="fade" src="images/members.jpeg" alt="Ciee" style="width:100%; height: 360px;  border-radius: 5%;">
                    <div class="container">
                        <div class="text"><p>Caption Three</p></div>
                    </div>
                  </div>
                  
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                var slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    
                        slides[i].style.display = "none";
                    
                      
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 4000)
                }
                

                
                </script>






            </div>




-->
            <div class="here" > 
                <div class="obj">
                    <div class="obj_title">
                        <h1>	Scope of Activities of CIIE: </h1>
                    </div>
                    <div class="obj_box"> 
                        <div class="obj_box1" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                           
                            <p style=" text-align: justify; text-justify: inter-word;font-size:18px " > <Strong style="font-size:24px"> Providing support </strong> <br><br>  CIIE will support in scaling up early-stage start-ups and facilitate converting business ideas into entrepreneurial ventures. To that end, CIIE aims to build and share resources including space and infrastructure, access to business support services, seed funds, mentoring and training programmes to enhance the skills of entrepreneurs.</p>
                        </div>
                        <div class="obj_box2" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                            <p style=" text-align: justify; text-justify: inter-word;font-size:18px " > <Strong style="font-size:24px">  Fostering a culture of innovation and entrepreneurship </strong> <br> For entrepreneurship to be widely prevalent in society, it needs to become an important part of the educational curriculum and be organically linked with innovation. CIIE will work towards fostering a culture of innovation among students and faculty of educational institutions by organising initiatives hackathons, tech-fests, idea competition, startup boot camps etc. These will encourage students and faculty to work on new ideas, which could later be converted into successful business ventures. </p>
                        </div>
                        <div class="obj_box3" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                            <p style=" text-align: justify; text-justify: inter-word;font-size:18px " > <Strong style="font-size:24px">  Building a conducive ecosystem </strong> <br><br> An effective entrepreneurial ecosystem requires active participation of multiple stakeholders, including business, policymakers, educational institutions, social networks and other civil society actors. CIIE will nurture this ecosystem by bringing together start-ups, industry mentors, eminent academicians and researchers. CIIE will also integrate entrepreneurial activities across various centers, departments, faculties at IIT (ISM) Dhanbad, thus breaking the silos</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container borders" style="padding-top: 10px; align:center ">
              <h1 >
              Partners and Sponsors
              </h1>
              <br/>


              <ul class="brands">
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
                
                <li class="brands__item">
                    <div style="text-align: center ;  width: 130px">

                      <img src="images/logos/logo.png" />
                      Apple
                    </div>  

                </li>
              </ul>
            </div>
        </main>
                

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
