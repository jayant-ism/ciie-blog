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
              <div class="texts">
                <h1> About CIIE</h1>
                <hr style="border-top: 1px solid rgb(107, 103, 103); ">
                <p> Centre for Innovation, Incubation and Entrepreneurship (CIIE) is a Not-for-Profit Centre at Indian Institute of Technology (Indian School of Mines)Dhanbad. The centre is dedicated to promoting innovation and entrepreneurship within the institute and in society at large.Goal of CIIE is to promote start-ups and entrepreneurship as a viable career optionand as means to making social and strategic impact.</p>
              </div>
            </div>

            <!-- about us box commented for now -->

            <!-- <div class="aboutus">
                <div class="aboutus_title"> 
                    <h1>Mission of CIIE</h1>
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

            <div class="here" > 
            <div class="container borders">
                <h1>About CIIE: </h1>
            <p>
            Centre for Innovation, Incubation and Entrepreneurship (CIIE) is a Not-for-Profit Centre at Indian Institute of Technology (Indian School of Mines) Dhanbad. The centre is dedicated to promoting innovation and entrepreneurship within the institute and in society at large. Goal of CIIE is to promote start-ups and entrepreneurship as a viable career option and as means to making social and strategic impact.
            </p>
            </div>

        <!--     <div class="obj">
                <div class="obj_title">
                    <h1>	Scope of Activities of CIIE: </h1>
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
            </div>-->
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

            <div class="container borders">
                <h1>Mission of CIIE:</h1>
<p>To unleash entrepreneurial capacity and facilitate start-ups, with the hope that the new business entities will generate economic value and employment for the country as well as find practical business solutions to social and environmental challenges of current times.</p>
            </div>
            
            
              <div class="container borders">
              <h1> 	Scope of Activities of CIIE </h1>
                  <p> CIIE would be involved in following three broad set of activities:</p>
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
                  <h1>INCUBATING WITH CIIE: POLICY AND PROCEDURE  </h1> 
               </div>
                  <div class="container borders">
                  

                  <p>CIIE seeks to support ventures from start-up phrase to scaling of operations by providing necessary support and help entrepreneurs. Ventures supported by CIIE may be set up for commercialization of a technological innovation, scaling up of an existing commercial or social enterprise/idea or for providing services to a larger enterprise. 
Ventures from any academic discipline will be welcome at CIIE, including but not restricted to Mining Engineering, Petroleum Engineering, Earth System Sciences, Geo-Physics, Information and Communication Technology (ICT), Biotechnology, Food Technology, Agriculture and allied sectors. 
Likewise, ventures aiming at making social impact could be working towards any of the prominent issues faced by society, including but not restricted to modernizing agricultural practices, greater economic opportunities for women, greater employment opportunities for youth and overcoming social divides. 
 </p> 
 </div>
                  <div class="container borders">

                   <h2>Incubation Process at CIIE: </h2>
                   <img src="images/IncuFlowchart.jpg"alt="incubation" style="height:50% ; width:50%; margin-left:1%">
                  <p> To apply for incubation at CIIE, applicant would be required to fill in an application form and furnish details about their enterprise or idea alongwith justification on how they were working /planning to work towards innovation, development or improvement of products or processes or services that would translate into a scalable business model with a high potential of employment generation or wealth creation. 
The application would then be screened at CIIE by an evaluation committee and examined for   financial and technical feasibility. If cleared in first round of screening, applicants may be invited to present their ideas before a select panel. 
If selected for incubation, incubatees would sign an incubation agreement containing rules and norms for incubation, consideration, equity holding, usage of laboratories and other facilities etc. Upon signing of agreement, incubatees would be allotted facilities at CIIE subject to availability and need of incubate, after which incubatees can start the process of incubation.  
 </p> 
 </div>
                  <div class="container borders">

                  <h2> Support offered by CIIE:  </h2>
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

</div>
                  <div class="container borders">
                  <h2> Intended Beneficiarie </h2>
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
                   <P>
                  CIIE may allow non-registered entities under its ‘pre-incubation’ scheme. Pre-incubation scheme is intended to help students and budding entrepreneurs to test their ideas before committing to a registered business entity. Support provided to pre-incubatees may differ from support provided to regular incubatees and would be decided on a case-to-case basis. 
                   </P>
                   </div>
                  <div class="container borders">
            
                  <h2>Rules governing Intellectual Property, Licensing and Technology Commercialization: </h2>
                  <p>
                      Intellectual property (IP) refers to intangible creations of the human intellect. In context of innovation and entrepreneurship, IP may include but not be restricted to confidential information, patents, designs, process, copyrights, algorithms, apparatus, circuit designs and assemblies, concepts, data, databases and data collections, designs, diagrams, documentation, drawings, flow charts, formulae, gate arrays, ideas and inventions (whether or not patentable or reduced to practice), know-how, materials, marketing and development plans, marks (including registered and unregistered trademarks and service marks, brand names, product names, logos, and slogans), methods, models, net lists, network configurations and architectures, photo masks, procedures, processes, systems, architecture, instructions, protocols, schematics, semiconductor devices, software code (in any form including source

code and executable or object code), specifications, subroutines, techniques, test vectors, tools, uniform resource identifiers, user interfaces, web sites, works of authorship, and other forms of technology.
<br><br>Licensing could be in form of Intellectual Property Rights (IPR) Licensing or Technology Licensing. IPR licensing refers to partnership between an intellectual property rights owner and another who is authorized to use such rights (licensee) in exchange for an agreed payment (fee or royalty). Technology licensing refers to an agreement whereby an owner of a technological intellectual property (the licensor) allows another party (the licensee) to use, modify, and/or resell that property in exchange for a compensation.
                   </p> 
                   <h3>Ownership of Intellectual property:</h3>
                   <p>
                       a) Enterprises by IIT (ISM) Dhanbad member: For enterprises or startups promoted and/or invested in by IIT (ISM) members singly or jointly with others, ownership of intellectual property generated during the incubation term shall be governed by IP rules of IIT (ISM) Dhanbad.
<br><br>As per IP rules of IIT (ISM) Dhanbad, intellectual property of any kind created by faculty, students (including trainees participating in any programmes), staff (including project staff), visitors and others would be owned by IIT (ISM) Dhanbad when either of the following apply:
                   </p>
                   <ul>
                       <li>IP was created through significant use of funds or facilities administered by IIT (ISM) Dhanbad</li>
                       <li>IP was created either as a part of the normal professional duty or work for hire</li>
                       <li>IP was created as a part of academic research and programmes or training leading towards a degree or otherwise (e.g. Project Courses)</li>
                       <li>IP was created in collaboration with or using help of faculty of IIT (ISM) Dhanbad</li>
                   </ul>
                   <p>
                       The terms ‘significant use of funds and facilities’ and ‘faculty collaboration’ are context specific and shall be defined by Intellectual Property Evaluation Committee on case-to-case basis.<br><br>
Alternatively, enterprise(s) promoted by IIT (ISM) Dhanbad members may enter into a contract with IIT (ISM) Dhanbad specifying sharing rights for the IP. In that case IP ownership would be governed by provisions of the contract.
 <br><br>
                       In cases where an IP is created by IIT (ISM) Dhanbad faculty or staff fully or as a part of the team, during deputation or official leave, the concerned IIT (ISM), DHANBAD personnel should officially communicate about the IP to the institute. Ownership of such IP shall be decided by the institute on case-to-case basis.
                   </p>
                   <p>
                       b) For external startups, i.e. enterprise or start-up promoted and invested in by non-IIT(ISM) Dhanbad members, intellectual property generated during the incubation term shall be owned by the company. or at the disposal of the board of the company.
<br>However, institute’s policy regarding intellectual property shall apply in case of:
                   </p>
                   <p>
                       <ul>
                           <li>Contribution from faculty of IIT (ISM) Dhanbad towards development of the intellectual property</li>
                           <li>Non-payment of utilization charges if the intellectual property was developed using funds, facilities and laboratory/equipment of IIT (ISM) Dhanbad</li>
                   </ul>
                   
                   <h3>Use of Intellectual property</h3>
                   <p>
                       a) For IP solely owned by IIT (ISM) Dhanbad: For IP held solely by IIT (ISM) Dhanbad the institute may decide upon use of IP and commercialization of technology in one of the following ways:
                   </p>
                   <p>
                       <ul>
                           <li>In cases where student is creator or inventor of the IP, IIT (ISM) Dhanbad may grant a non-exclusive license for commercialization</li>
                           <li>For such startups/enterprises IIT (ISM) Dhanbad may waive off the requirement of up-front payment of royalty, based on request by the organisation</li>
                           <li>In cases where royalty or license fee are not waived off, organisation may request for deferring the payment. In that case, institute may enter into agreement for sharing of revenue generated due to commercialisation of technology.<br>
                                       Revenue sharing mechanism may be as follows:<br><br>
                            <table border=1>
            <tr>
                <th>
                    Case
                </th>
                <th>Total Sales</th>
                <th>Percentage thereof</th>
            </tr>
            <tr>
                <td>
                    1.
                </td>
                <td>Not exceeding Rs.50 lakhs</td>
                <td>Nil</td>
            </tr>
            <tr>
                <td>
                    2.
                </td>
                <td> Greater than Rs. 50 lakh,less than Rs.1 crore</td>
                <td>1%</td>
            </tr>
            <tr>
                <td>
                    3.
                </td>
                <td> Greater than Rs 1 crore,less than Rs.2 crore</td>
                <td>2%</td>
            </tr>
            <tr>
                <td>
                    4.
                </td>
                <td> Greater than Rs.2 crore,less than Rs. 5 crore</td>
                <td>3%</td>
            </tr>
            <tr>
                <td>
                    5.
                </td>
                <td> Greater than Rs. 5 crore,less than 10 crore</td>
                <td>4%</td>
            </tr>
            <tr>
                <td>
                    6.
                </td>
                <td> Greater than Rs. 10 crore</td>
                <td>5%</td>
            </tr>
            
        </table>
                           </li>
                           <li>Even when licensed to third party for commercialisation, IIT (ISM) Dhanbad shall retain a non-exclusive, free and irrevocable license to use the IP for teaching and research activities, consistent with confidentiality agreements wherever entered into by IIT (ISM) Dhanbad and the creator(s) or inventor(s)</li>
                           <li>
                           The net earnings from the commercialization of IP owned by IIT (ISM), DHANBAD would be shared with the inventors in following ratios:<br>
                               <table border=1>
                               
                                     <tr>
            <th>Case</th>
            <th>Revenue (Amount)</th>
            <th>Institute’s Share</th>
            <th>Inventor’s Share</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Rs. 1 crore or less</td>
                <td>35%</td>
                <td>65%</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rs. 1 crore-5 crore</td>
                <td>50%</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rs. 5 crore or above</td>
                <td>65%</td>
                <td>35%</td>
            </tr>
                                   
                                   
                                   
                                   
                                   
                               </table>
                           </li>
                   
                   </ul>
                   </p>
                  <p>The creator(s) share would be declared annually, and disbursement will be made to the creator(s), their legal heir, whether or not the creators are associated with IIT (ISM) Dhanbad at the time of disbursement.<br>
Co-creators of IP shall sign at the time of disclosure, a distribution of IP Earnings’ Agreement, which shall specify the percentage distribution of earnings from IP to each co-inventor. The inventors may at any time by mutual consent revise the Distribution of IP Earnings Agreement.</p>
                <p>b) For other types of IP ownership: when not held solely by IIT (ISM) Dhanbad, use and licensing of IP may be subject to following conditions:
                  <ul>
                     
         <li>In cases of IP held jointly between IIT (ISM) Dhanbad and third party, a ‘no objection’ certificate will have to be obtained before granting license for commercialization</li>
                      <li>In cases of IP solely held by external startups, the organisations would have complete rights to collaborate with other companies and sell or share or the IP rights</li>       
                  </ul>
                        
                    </p>
                    </div>
                  <div class="container borders">
                  
            <h2>Consideration:</h2>
            <ul>
                <li>
            <p>a) CIIE may charge incubatees for use of office space, services, facilities, laboratory, equipment, seed money, IIT (ISM) Dhanbad’s intellectual property etc. Indicative rate of payment for use of facilities and infrastructure are as follows:
            <table border=1>
                 <tr>
                <th>S. No.</th>
                <th>Facility</th>
                <th>Charges</th>
                
            </tr>
            <tr>
                <td>1.</td>
                <td>Office space (rental)</td>
                <td>INR 8 per sq. ft. (for first two years)</td>
                
            </tr>
            <tr>
                <td>2.</td>
                <td>Internet access</td>
                <td>As decided by IIT (ISM) Dhanbad</td>
                
                
            </tr>
            <tr>
                <td>3.</td>
                <td>Electricity</td>
                <td>On cost basis</td>
                
                
            </tr>
            <tr>
                <td>4.</td>
                <td>Laboratory and equipment</td>
                <td>As decided by IIT (ISM) Dhanbad</td>
                
                
            </tr>
            <tr>
                <td>5.</td>
                <td>Knowhow owned by IIT (ISM) Dhanbad</td>
                <td>As decided by IIT (ISM) Dhanbad</td>
                
                
            </tr>
            <tr>
                <td>6.</td>
                <td>Common facilities (rental)</td>
                <td>Nil</td>
                
            </tr>
            <tr>
                <td>7.</td>
                <td>Common services</td>
                <td>Nil</td>
                
            </tr>
                
            </table>
            Charges may change from time to time</p><li>
            <li>b) Charges for various facilities shall be payable strictly within seven days from date of communication. In case of default in payment, company may be charged 12% interest compounded quarterly or asked to issue dilutable equity</li>
            <!-- here --> <li>c)IIT(ISM) Dhanbad shall have lien on the assets of the resident company at the incubation center till such time that the resident company clears all the outstanding dues</li>
               <li>d)In lieu of support by CIIE, incubatee is required to provide a dilutable equity to IIT (ISM) Dhanbad. At the time of disposal, the decision of CIIE / IIT(ISM) regarding buyback of full or part of the equity issued shall be conveyed to the company and the company shall abide by the decision. Dilutable equity to be provided by the enterprises:
            <table border=1>
                   
                   <tr>
                <th>S. No.</th>
                <th>Incubation Type</th>
                <th>Percentage of equity</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Enterprise incubated at IIT (ISM) Dhanbad</td>
                <td>3% of promoters’ dilutable equity</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Pre-incubation at IIT (ISM) Dhanbad</td>
                <td>10% of promoters’ dilutable equity</td>
            </tr>
                   
                   
                   
                   
                   </table>
                   The dilutable equity shall be maintained in proportion to promoters’ equity. If promoters increase their shareholding then they shall give additional shares to IIT (ISM) Dhanbad to maintain the pre-determined level of equity. This clause shall not apply in case of third-party investment in the company
                   </li>
                   </div>
                  <div class="container borders">

            <h2>
            Terms of Financial Support</h2>
            <ul>
                <li>a) Option – I:<br>
                Full amount would be paid back with an interest, which will be Prime Lending Rate (PLR) of State Bank of India (on the date of sanction) less 4% and remains fixed for the tenure of the loan. The loan amount along with interest will repaid in 36 EMIs (Equal Monthly Installments) and the repayment will start after 18 months from the date of first disbursement of loan</li>
                <li>b) Option – II:<br>
                    <ul><li>i. 50% of the total seed fund sanctioned will be interest free loan, repayment of which would start after 18 months from the date of first disbursement of loan. The component will be repaid in 36 EMIs</li>
                    </ul></li>
              <li>c) Option – III
                  <ul>
                      <li>i. 75% of the total seed fund sanctioned will be a loan and will repaid back with an interest of PLR less 6%. The loan amount along with interests will be repaid in 36 EMIs (Equal Monthly Instalments) and the repayment will start after 18 months from the date of first disbursement of loan.</li>
                      <li>
                          ii. 25% of the seed fund sanctioned would be convertible into equity (@ 2% equity against loan up to Rs. 5 lakhs) at par.
                      </li>
                  
                  </ul>
                </li>
                <p>The company would have option to choose any one of the options are stated above and communicate to CIIE in writing. Once the option is chosen and communicated by the company, in no case it can be changed. In case of default payment, the entire loan amount will be converted into equity of 25% at par.
In addition to the nominee director from IIT (ISM) against the incubation equity, there shall be one more nominee director from IIT (ISM) for the equity against seed fund disbursed.</p>
            </ul>
            </div>
                  <div class="container borders">

            <h2>Duration of Incubation:</h2>
            <ul>
                <li>a) Incubatee company shall be offered an incubation period of two years. However, based on the performance of the company and a written request the term can be extended by six months</li>
                <li>b) Beneficiaries under pre-incubation scheme may avail the facilities allowed to them for a period of one year. However, based on progress made by the individual/group of individuals in moving the idea towards commercialization and a written request the term can be extended by six months</li>
            </ul>
            </div>
                  <div class="container borders">

            <h2>Entrepreneurship by members of IIT (ISM) Dhanbad</h2>
            <p>IIT (ISM) Dhanbad strongly encourages its students, staff and faculty to engage in innovation and incubation activities, especially those directly towards translating research outcomes into commercial products. Following policy governs incubation and entrepreneurship activities of the members of the institute:</p>
           
                <h3>Incubation of organisations/enterprises founded by members of IIT (ISM) Dhanbad</h3>
                    <p>
                    A company founded by faculty, staff or students (including research scholars) of IIT (ISM) Dhanbad will necessarily be required for incubation in CIIE. However, in the exceptional cases, where a member of the institute wants to open the company outside institute, a sufficient justification has to be provided, which will be evaluated by a committee comprising of Dean (R&D), Dean (IRAA), HoC, CIIE and two faculty members. The recommendation of the committee will be final and binding.
                    <br>For the incubation of an enterprise founded by member(s) of the institute, evaluation will be as per the incubators policy of the institute. Upon approval, the institute shall exercise its discretion on:
                    </p>
                <ul>
                    <li>A liability free equity of 10 % in the company for a period of ten years. Against this equity, the institute shall permit the use of IP developed within IIT (ISM) by the founding faculty members and students</li>
                    <li>Equity against incubation will be as per Incubators Policy of the institute, if the enterprise company is incubated at CIIE</li>
                    <li>In case the institute provides loan to the company, Institute‘s rules will apply for its repayment/additional equity holding</li>
                    </ul>
                <h3>Modes of Faculty/Staff’s Engagement with Startups:</h3><br>
                    <p>
                    Faculty and staff may engage with startups/enterprises in following modes:<br>
a) Capital Investment: Faculty / Staff may be involved in the Start-up by providing capital investment alone in return for shares, with no other managerial, technical or mentorship involvement whatsoever. All shares thus allotted can be retained by the concerned Faculty / Staff, and the transaction is treated as a purely private commercial transaction of no concern to the institute. The member must declare this to the institute and the organization so as to avoid conflict of interest situations</p>
                 <br>   <p>b) Involvement beyond capital investment: in case a faculty/staff member chooses to play an operational role (technical advisor, CEO, marketing manager etc.) in an enterprise, he or she would have the option to take a sabbatical as per the prevailing rules of IIT (ISM) Dhanbad and work full time in the enterprise or may get involved with organization on part time basis.
                    <ul>
                        <li>In case of full-time involvement, no compensation is due to the institute, as long as the involvement of the member completely ceases after the leave period. Member must not involve himself or herself in any capacity with the enterprise, expect as a shareholder, upon re-joining the institute. In case the member is involved as a mentor or consultant etc., rules applicable will be same as that of part-time</li>
                        <li>In case of part-time involvement, member may dedicate part or all of the days allocated for consultancy work to the business. However, under no circumstance the total number of days of non-institute activities would exceed the institute norms. Compensation to faculty or staff may be in cash, in which case norms of IIT (ISM) Dhanbad for consultancy projects may be applicable. If compensation is in form of shares of the start-up or enterprise then upto 20% of shares offered to faculty or staff shall be transferred to IIT (ISM) Dhanbad.
In case of part-time involvement with a startup/enterprise, it is expected that the faculty/staff will balance the work his or her academic or administrative responsibilities as assigned by IIT (ISM) Dhanbad</li>
                    </ul>
                    </p>      
               
        <h3>Modes of Students/research scholar’s Engagement with Startups:</h3>
        <p>
        Students, including research scholars with live registration at IIT (ISM) Dhanbad may engage with startups/enterprises in following modes:
<br><br>
    a) Full time involvement: A research scholar/student can seek special leave for a semester, or an additional period to work for a Start-up on a fulltime basis. Upon returning, the student must satisfy all norms (including the maximum duration of his/her respective programme of the study) in order to earn a degree. If the research scholar/students is compensated by startups or enterprises with cash/and or shares, he or she must assign upto 5% of the total cash/shares allotted to him or her to IIT (ISM) Dhanbad
     <br>   <br>    
    b) Part-time involvement: A research scholar/students can seek permission to work for a start-up on part time basis. In such cases, IIT (ISM) Dhanbad’s part-time engagement norms in projects during a semester/vacation period will apply. If the research scholar/students is

compensated by startups or enterprises with cash/and or shares, he or she must assign upto 5% of the total cash/shares allotted to him or her to IIT (ISM) Dhanbad</li><br><br>
        When a member of IIT (ISM) Dhanbad utilizes leave of absence (Sabbatical or any applicable equivalent) for direct, active participation in a startup or enterprise, it is obligatory that the concerned Head(s) of Department be informed at least three months in advance. Shorter notice needs to be specifically approved by the Head of Department. This is to ensure that the academic programmes of the institute are not affected.</p>
    </ul>   
    <h3>Conflict of Interest</h3>
        <p>
            It is essential that members of IIT (ISM) Dhanbad avoid any conflict of interest between their roles in the institute and in the enterprise/startup. Conflict of interest may arise on account of following:
        <ul>
            <li>Institute’s resources are in control of the member and are also sought by the Start-up/enterprise with which they are involved</li>
            <li>Member has been developing IPR in a research activity / project at IIT (ISM) Dhanbad that is closely related to the IPR they may be developing when on leave and working in the Start-up/enterprise</li>
            <li>Relative shareholding of the member and IIT (ISM) Dhanbad is sought to be changed by infusion of fresh capital in the Start-up by the member</li>
            <li>Shares of the startup/enterprise are allotted to a close relative (spouse, children, parents) of a member who is involved with the Start-up/enterprise</li>
            
        </ul>
    </p>
     <p>
        <ul>
           For each member of IIT (ISM) who applies for approval for engaging with a Start-up, CIIE may do following to avoid conflict of interest:
            <li>Determine potential areas/activities where there is conflict of interest and arrive at an agreed upon methodology for ensuring transparency in decision making in respect of these activities/areas</li>
            <li>Set up an - oversight committee of Faculty / Staff for specific relationships to ensure that conflicts of interest do not arise</li>
            <li>Require the member to declare their financial interests, and those of their close relatives, in the Start-up, at the time of engagement, as well as whenever a change in such interests takes 
                   place due to additional investment in the Start-up, or payment / share allotment by the Startup</li><br>
            In case a member of the CIIE Governing Council has shares in a startup/enterprise, the Governing Council will determine whether the said member should resign from the Council, in order to avoid potential conflict of interest, or only recuse himself /herself when matters pertaining to the Start-up with which he / she is involved are discussed.
    </ul>
        
        </p>
    </div>
    <div class="container borders">

    <h2> Other Terms and Conditions:</h2>
<ul>
    <li>a) Seed loan, if sanctioned, shall be sanctioned only to the incubated companies. The sanction shall be subject to performance of and milestones achieved by the incubate company. A company desirous of obtaining a seed loan may submit an application for seed fund after three months of incubation. The application of the seed loan should clearly indicate the requirement, activities, expenditure heads and timelines</li>
    <li>b) Services, facilities, laboratory, and equipment etc. may be provided by the institute or the empaneled service providers. Provision and use of the facilities may be governed by availability of the same and rules and regulations of the institute</li>
    <li>c)CIIE shall evaluate the performance of incubates every quarter to assess whether incubatees have been meeting the milestones specified in incubation application. Incubatees having availed seed fund would also be evaluated for financial health of the company, including but not restricted to order booking, expenses, profitability, utilization of seed money loan for the specified purposes and its ability to repay the loan. Further disbursal of seed fund may be depend on progress shown in previous appraisal</li>
    <li>d)Any company that is engaged in or is proposing to be engaged in activities that may be in conflict with activities of IIT (ISM) Dhanbad like imparting educational courses and/or training programs shall require explicit permission from IIT (ISM) Dhanbad in order to be eligible for incubation</li>
    <li>e)Incubatee shall surrender and vacate the premises on IIT(ISM) on a notice by CIIE no advance notice is required to be given by CIIE to the resident company</li>
    <li>f) Notwithstanding anything contained in the policy framework, all activities at CIIE and of incubatees activities shall be governed by the statute, rules and regulations of IIT (ISM) Dhanbad as applicable from time to time. In case of any conflict the statute, rules and regulations of IIT (ISM) Dhanbad shall prevail over policy of CIIE</li>
</ul>
            
            </div>
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
