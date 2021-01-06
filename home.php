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
    
</head>
<body>
    <div class="containrr">
        <?php require 'require/header.php';?>

        <?php require 'require/nav.php';?>

        <main>
            
            <div class="achieve_trophy ">
              <div class="texts">
                <h2>CIIE</h2>
                <hr style="border-top: 1px solid rgb(107, 103, 103); ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>

            <!-- about us box commented for now -->

            <!-- <div class="aboutus">
                <div class="aboutus_title"> 
                    <p>ABOUT US</p>
                </div>
                <div class="aboutus_info">
                    <div class="aboutus_info1">
                        <p>To unleash entrepreneurial capacity and facilitate start-ups, with the hope that the new business entities will generate economic value and employment for the country as well as find practical business solutions to social and environmental challenges of current times.</p>
                    </div>
                    <div class="aboutus_info2">
                        <p>To motivate, build and promote out of the box thinking and development of innovative ideas. To build an environment that will facilitate the creation of social enterprise knowledge through research and empower students to apply their entrepreneurship abilities to develop solutions for greater social impact through academia.</p>
                    </div>
                </div> 
            </div> -->



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
            <div class="container">
            <p>
            Centre for Innovation, Incubation and Entrepreneurship (CIIE) is a Not-for-Profit Centre at Indian Institute of Technology (Indian School of Mines) Dhanbad. The centre is dedicated to promoting innovation and entrepreneurship within the institute and in society at large. Goal of CIIE is to promote start-ups and entrepreneurship as a viable career option and as means to making social and strategic impact.
            </p>
            </div>

            <div class="obj">
                <div class="obj_title">
                    <p>OBJECTIVES</p>
                </div>
                <div class="obj_box"> 
                <div class="obj_box1" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                    <p>Providing support to existing or new startups/enterprises: CIIE will support in scaling up early-stage start-ups and facilitate converting business ideas into entrepreneurial ventures. To that end, CIIE aims to build and share resources including space and infrastructure, access to business support services, seed funds, mentoring and training programmes to enhance the skills of entrepreneurs.</p>
                </div>
                <div class="obj_box2" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                    <p>Fostering a culture of innovation and entrepreneurship: For entrepreneurship to be widely prevalent in society, it needs to become an important part of educational curriculum and be organically linked with innovation. CIIE will work towards fostering a culture of innovation among students and faculty of educational institutions by organising initiatives hackathons, tech-fests, idea competition, startup bootcamps etc. These will encourage students and faculty to work on new ideas, which could later be converted to successful business ventures. .</p>
                </div>
                <div class="obj_box3" style="border-radius: 2%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
                    <p>Building a conducive ecosystem for entrepreneurship: An effective entrepreneurial ecosystem requires active participation of multiple stakeholders, including business, policymakers, educational institutions, social networks and other civil society actors. CIIE will nurture this ecosystem by bringing together start-ups, industry mentors, eminent academicians and researchers. CIIE will also integrate entrepreneurial activities across various centers, departments, faculties at IIT (ISM) Dhanbad, thus breaking the silos</p>
                </div>
                </div>
            </div>
<!--
            <div class="row-lg-12" style="background-color: #e8e8db;">
                <h1 style=" color: #116466; text-align: center; margin-bottom: -1px"> Members </h1>
                 <div class="col-lg-4 col-md-12" style="background-color: #e8e8db;">
                    <div class="row-lg-4" style=" margin-bottom: 80px;" ><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae.</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                 </div>
        
        
                 <div class="col-lg-4 col-md-12" style="background-color: #e8e8db;">
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                </div>
        
        
                <div class="col-lg-4 col-md-12 mobile-view" style="background-color: #e8e8db;">
                    <div class="row-lg-4 " style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                    <div class="row-lg-4" style=" margin-bottom: 80px;"><p><img style="float: left;" src="images/pic.jpeg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptas quam veniam officia eveniet sint ad recusandae</p></div>
                </div>
            </div>
              -->

              <div class="container">
              <h1> 	Scope of Activities of CIIE </h1>

               <ul>
               <li>
               <p> a)	Providing support to existing or new startups/enterprises: CIIE will support in scaling up early-stage start-ups and facilitate converting business ideas into entrepreneurial ventures. To that end, CIIE aims to build and share resources including space and infrastructure, access to business support services, seed funds, mentoring and training programmes to enhance the skills of entrepreneurs.   </p>
               </li>
               <li>
               <p> b)	Fostering a culture of innovation and entrepreneurship: For entrepreneurship to be widely prevalent in society, it needs to become an important part of educational curriculum and be organically linked with innovation. CIIE will work towards fostering a culture of innovation among students and faculty of educational institutions by organising initiatives hackathons, tech-fests, idea competition, startup bootcamps etc. These will encourage students and faculty to work on new ideas, which could later be converted to successful business ventures. </p>
               </li>
               <li>
               <p> c)	Building a conducive ecosystem for entrepreneurship: An effective entrepreneurial ecosystem requires active participation of multiple stakeholders, including business, policymakers, educational institutions, social networks and other civil society actors. CIIE will nurture this ecosystem by bringing together start-ups, industry mentors, eminent academicians and researchers. CIIE will also integrate entrepreneurial activities across various centers, departments, faculties at IIT (ISM) Dhanbad, thus breaking the silos</p>
               </li>
               <ul>
              </div> 


                <div class="container">
                  <h1> POLICY AND PROCEDURE  </h1> 
                  <p>CIIE seeks to support ventures from start-up phrase to scaling of operations by providing necessary support and help entrepreneurs. Ventures supported by CIIE may be set up for commercialization of a technological innovation, scaling up of an existing commercial or social enterprise/idea or for providing services to a larger enterprise. 
Ventures from any academic discipline will be welcome at CIIE, including but not restricted to Mining Engineering, Petroleum Engineering, Earth System Sciences, Geo-Physics, Information and Communication Technology (ICT), Biotechnology, Food Technology, Agriculture and allied sectors. 
Likewise, ventures aiming at making social impact could be working towards any of the prominent issues faced by society, including but not restricted to modernizing agricultural practices, greater economic opportunities for women, greater employment opportunities for youth and overcoming social divides. 
 </p> 

                  <h1>Incubation Process at CIIE: </h1>
                  <p> To apply for incubation at CIIE, applicant would be required to fill in an application form and furnish details about their enterprise or idea alongwith justification on how they were working /planning to work towards innovation, development or improvement of products or processes or services that would translate into a scalable business model with a high potential of employment generation or wealth creation. 
The application would then be screened at CIIE by an evaluation committee and examined for   financial and technical feasibility. If cleared in first round of screening, applicants may be invited to present their ideas before a select panel. 
If selected for incubation, incubatees would sign an incubation agreement containing rules and norms for incubation, consideration, equity holding, usage of laboratories and other facilities etc. Upon signing of agreement, incubatees would be allotted facilities at CIIE subject to availability and need of incubate, after which incubatees can start the process of incubation.  
 </p> 
                  <h1> Support offered by CIIE:  </h1>
                  <p> CIIE will actively support its incubatees through a combination of inputs, which could include: 
                  
                  <ul> 
                  <li> <p> a)	Branding: permission to use branding in form of ‘IIT (ISM) Dhanbad Incubated Company’ or ‘Incubated by IIT (ISM) Dhanbad’ </p> </li> 
                  <li> <p> b)	Office space and infrastructure: Shared office space at CIIE , computer and related equipment (personal computer, laptop, printer etc.)1, basic furniture (table and chair) and common services and facilities at CIIE (secretarial services, video and teleconferencing, conference room)</p> </li> 
                  <li> <p> c)	Financial support: Seed funding (subject to availability of funds, grants and schemes), introduction to angel investors, venture capitalists and financial institutions </p> </li> 
                  <li> <p> d)	Business support services: facilitation in technology development, ideation, creativity and design thinking, financial management, cash-flow management, new venture planning, business development, product development, product costing, marketing, brand development, human resource management, law and regulations for businesses etc. </p> </li> 
                  <li> <p> e)	Permission to use library, laboratories, workshop facilities, equipment and intellectual resources at IIT (ISM) Dhanbad </p> </li>   
                  <li> <p> f)	Mentoring through institute faculty and alumni and experts from industry</p> </li> 
                  <li> <p> g)	Networking support:  Meetings with visitors of IIT (ISM), Dhanbad (such as academics, alumni, venture capitalists, industry professionals etc.), showcasing work in networking events </p> </li> 
                  </ul></p>


                  <h1> Intended Beneficiarie </h1>
                  <p>
                  CIIE will extend support to a broad base of innovators and aspiring start-ups. Incubatees may include but not be restricted to:
                  <ul> 
                  <li> <p>a)	IIT (ISM) Dhanbad member: Any permanent faculty or staff (on duty or on short/long leave), research scholars, students with live registration, alumni </p> <li> 
                  <li> <p> b)	IIT (ISM) Dhanbad Incubation Enterprise/startup: Enterprise or startup promoted and/or invested in by IIT (ISM) members singly or jointly with others</p> <li> 
                  <li> <p> c)	External Startups:  Enterprise or startup promoted and invested in by non-IIT(ISM) Dhanbad members </p> <li> 
                   </ul>
                  An entity shall be considered as a startup:
                  <ul> 
                  <li> <p>a)	Upto a period of ten years from the date of incorporation/registration, if it is incorporated as a private limited company (as defined in the Companies Act, 2013) or registered as a partnership firm (registered under section 59 of the Partnership Act, 1932) or a limited liability partnership (under the Limited Liability Partnership Act, 2008) or a section 25 company (as defined in the Companies Act, 2013) in India </p> <li> 
                  <li> <p> b)	Turnover of the entity for any of the financial years since incorporation/registration has not exceeded one hundred crore rupees</p> <li> 
                  <li> <p>c)	Has not been formed by splitting up or reconstruction of an existing business </p> <li> 
                  </ul>
                  CIIE may allow non-registered entities under its ‘pre-incubation’ scheme. Pre-incubation scheme is intended to help students and budding entrepreneurs to test their ideas before committing to a registered business entity. Support provided to pre-incubatees may differ from support provided to regular incubatees and would be decided on a case-to-case basis. 


                  </p>

 </p> 
                  <h1>  </h1>
                  <p> </p> 
                  

<!-- here --> 
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
            <div class="container">

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