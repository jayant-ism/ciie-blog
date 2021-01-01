<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csr_funds-ciie</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/csr_funds.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}



.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 30px;
	max-width: 500px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	width: 100%;
}

.btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}


</style>

</head>
<body>

<?php require 'require/header.php';?>
<?php require 'require/nav.php';?>
<div class="row" >
	<div class="container"> 		
        <div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Form heading </h6>
					<h2>3 line form details</h2>
					<a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Title 
						</span>
					</div>
					<h6>About form</h6>
    		        <h2>You can download the .doc files from <a href="files/Incubation_form-students.doc" download > here </a> and .pdf files from <a href="files/Incubation_form-students.pdf" download > here </a> </h2>

					 <button class="btn" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSf4Bo9WsxDaRPm35WzcvHQ_lFlvOFWgfq9S7av5fBXMva9ScQ/viewform;'"  >Submit</button>

				</div>
			</div>
		</div>

		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Form heading </h6>
					<h2>3 line form details</h2>
					<a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
						Title 
						</span>
					</div>
					<h6>About form</h6>
           	 		<h2>You can download the .doc files from <a href="files/Incubation_form-outsiders.doc" download > here </a> and .pdf files from <a href="files/Incubation_form-outsiders.pdf" download > here </a> </h2>
                
			 		<button class="btn" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSf4Bo9WsxDaRPm35WzcvHQ_lFlvOFWgfq9S7av5fBXMva9ScQ/viewform;"  >Submit</button>
			
				</div>
			</div>
		</div>


		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Form heading </h6>
					<h2>3 line form details</h2>
					<a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Title 
						</span>
					</div>
					<h6>About form</h6>
            		<h2>You can download the .doc files from <a href="files/Faculty_entrepreneurship_form.doc" download > here </a> and .pdf files from <a href="files/Faculty_entrepreneurship_form.pdf" download > here </a> </h2>
             		<button class="btn" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSf4Bo9WsxDaRPm35WzcvHQ_lFlvOFWgfq9S7av5fBXMva9ScQ/viewform;"  >Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'require/footer.php';?>

</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death  



<div class="container">

        <main>


</div>




        </main>

    </div>


-->

