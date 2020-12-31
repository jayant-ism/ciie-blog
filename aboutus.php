<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-ciie</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/aboutus.css">
</head>
<body>
    
<?php require 'require/header.php';?>

<?php require 'require/nav.php';?>
    <div class="container">

        <main>
            <div class="aboutus_head">
                <p>ABOUT US</p>
            </div>
            <div class="aboutus_row">
                <div class="aboutus_col1">
                    <div class="text_head">
                        <p>Mission & Vision</p>
                    </div>
                    <div class="text">
                        <p>To unleash entrepreneurial capacity and facilitate start-ups, with the hope that the new business entities will generate economic value and employment for the country as well as find practical business solutions to social and environmental challenges of current times.</p>
                        <br>
                        <p>To motivate, build and promote out of the box thinking and development of innovative ideas. To build an environment that will facilitate the creation of social enterprise knowledge through research and empower students to apply their entrepreneurship abilities to develop solutions for greater social impact through academia.</p>
                    </div>
                </div>
                <div class="aboutus_col2">
                    <div class="text_head">
                        <p>Highlights</p>
                    </div>
                </div>
            </div>
            <div class="aboutus_row">
                <div class="aboutus_col1"><div class="text_head">
                        <p>Committee</p>
                    </div>
                    <div class="slideshow-container" style="padding-top: 50px;">
                
                        <div class="mySlides fade ">
                          
                          <div class="card">
                            <img src="images/trophy.jpeg" alt="Ciee" style="width:100%; height: 250px; border-radius: 5%; margin: auto;">
                            <div class="container">
                                <div class="text"><p>Caption One</p></div>
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="mySlides fade ">
                          
                          <div class="card">
                            <img src="images/trophy.jpeg" alt="Ciee" style="width:100%; height: 250px;  border-radius: 5%;">
                            <div class="container">
                                <div class="text"><p>Caption Two</p></div>
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="mySlides fade ">
                          
                          <div class="card">
                            <img src="images/members.jpeg" alt="Ciee" style="width:100%; height: 250px;  border-radius: 5%;">
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
                          setTimeout(showSlides, 2000)
                        }
                        
        
                        
                        </script></div>
                <div class="aboutus_col2"><div class="text_head">
                        <p>Core Team</p>
                    </div></div>
            </div>
            <div class="aboutus_row">
                <div class="aboutus_col3"><div class="text_head">
                    <p>Support</p>
                </div></div>
            </div>
        </main>

    </div>

    <style>
        .img_slider{
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
        .text{
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
        /* .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
          margin-bottom: 30px;
        } */
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 2.0s;
          animation-name: fade;
          animation-duration: 2.0s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 600px) {
          .text {font-size: 11px}
          .mySlides{
              width:100%;
          }
        }
    </style>
    
    </div>
    
    <?php require 'require/footer.php';?>
</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death  
--> 