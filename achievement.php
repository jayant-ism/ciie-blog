<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Achievements</title>
    
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



<div class="containrr">
        
        

        <main>
            


            
            <div class="row containerr" style="margin-top: 50px;">

              <div  style="color: #2c3531;">
                    <h2 style="font-size:32px">Achievements</h2>
                    <hr style="border-top: 1px solid rgb(107, 103, 103); ">
                
                </div>
                
            
              <!--  place loop here 



              <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 10px;">
                <div class="card" >
                  <div class="face face1">
                     <div class="content">
                          <img src="   place image link   ">
                        </div>
                  </div>
                  <div class="face face2" style="background-color: #333; color: #fff;  border-radius: 2%;">
                      <div class="content" style="text-align: center;">
                          <p>  place image details  </p>
                          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                          <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                      </div>
                  </div>
              </div>
            
              </div>





            -->
            <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 10px; ">
                <div class="card" >
                  <div class="face face1">
                      <div class="content">
                          <img src="./images/achive1.jpeg" height=220>
                          
                        </div>
                  </div>
                  <div class="face face2" style="background-color: #333;  color: #fff;  border-radius: 2%;">
                      <div class="content" style="text-align: center;">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                              <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                              <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                      </div>
                  </div>
              </div>
            
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 10px;">
                <div class="card" >
                  <div class="face face1">
                     <div class="content">
                          <img src="./images/achive2.jpeg" height=220>
                        </div>
                  </div>
                  <div class="face face2" style="background-color: #333; color: #fff;  border-radius: 2%;">
                      <div class="content" style="text-align: center;">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                          <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                      </div>
                  </div>
              </div>
            
              </div>


              <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 10px;">
                <div class="card" >
                  <div class="face face1">
                      <div class="content">
                          <img src="./images/achive3.jpeg" height=220>
                          
                        </div>
                  </div>
                  <div class="face face2" style="background-color: #333;  color: #fff; border-radius: 2%;">
                      <div class="content" style="text-align: center;">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                          <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                      </div>
                  </div>
              </div>
            
              </div>
           
              
            
            
            
            </div>
            
            

            


            
            </div>
        </main>


        <span>.</span>
        <br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br>
        
        <?php require 'require/footer.php';?>
        
    </div>
    <style>






.containrr {
  padding: 16px;
  width: 90%;
  justify-content: center;
  margin: 0 auto;
}

.flip-card {
  background-color: transparent;
  width: 100%;
  border: 1px solid #f1f1f1;
  
}

/* This containerr is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 93%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box containerr */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color:antiquewhite;
  color: black;
  font-size: 100%;
  border-radius: 5%;
  transform: rotateY(180deg);
}



.containerr{
    width: 100%;
   
    justify-content: space-between;
}

.containerr .card{
    position: relative;
    cursor: pointer;
}

.containerr .card .face{
    width: 100%;
    height: 200px;
    transition: 0.8s;
}

.containerr .card .face.face1{
    position: relative;
    
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
    width: 400px
}
.card{
  width: 400px;
  margin: 0 auto;
}
.containerr .card:hover .face.face1{
    
    transform: translateY(0);
}

.containerr .card .face.face1 .content{
    opacity: 1;
    transition: 0.5s;
    width: 400px;
    
}

.containerr .card:hover .face.face1 .content{
    opacity: 0.5;
}

.containerr .card .face.face1 img{
    width: 100%;
    border-radius: 5%;
}

.containerr .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
}

.containerr .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
    transform: translateY(-100px);
    width: 400px;
  
}

@media only screen and (max-width: 340px){
  .achieve_trophy img{
    width: 340px;
  }
}
@media only screen and (max-width: 1380px) {
  .containerr .card .face.face1 .content{
width: 340px;
  }
  .containerr .card .face.face2{
width: 340px;
  }
  .card{
    width: 340px;
  }
  .containerr .card .face.face1{
    width: 340px;
  }
}

.containerr .card:hover .face.face2{
    transform: translateY(0);
}

.containerr .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.containerr .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    transition-duration: 1s;
    color: #fff;
    padding: 5px;
    border-radius: 20%;
    
}

.containerr .card .face.face2 .content a:hover{
    background-color: #fff;
    color: #333;
}
    </style>
    <script src="https://kit.fontawesome.com/c9e9474c74.js" crossorigin="anonymous"></script>
</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death   -->