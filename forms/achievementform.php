<?php require '../formRestriction/userChecking.php';?>
<?php
// define variables and set to empty values
$title = $name = $description = "";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageToUpload "]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $name = test_input($_POST["name"]);
  $description = test_input($_POST["description"]);

  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload "]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["imageToUpload "]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["imageToUpload "]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["imageToUpload "]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// error_reporting(0);
// require_once "../Classes/PHPExcel.php";
// $excel= PHPExcel_IOFactory::load("");
// //Get the first sheet in excel
// $excel->setActiveSheetIndex(0);

// $i = 1; 
// while( $excel->getActiveSheet()->getCell('A'.$i) != ""){
// $i++;
// }

// // insert value
// $excel->getActiveSheet()->SetCellValue('A'.$i, $i);
// $excel->getActiveSheet()->SetCellValue('B'.$i, $startupname);
// $excel->getActiveSheet()->SetCellValue('C'.$i, $teamleader);
// $excel->getActiveSheet()->SetCellValue('D'.$i, $date); 
// // saving
// $writer = PHPExcel_IOFactory::createWriter($excel, "Excel2007");
// $writer->save("");
?>
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    
    <input class="form-control" type="text" name="title" placeholder="Title" required><br>
    <input class="form-control" type="text" name= "name" placeholder="Name" required><br>
    <textarea class="form-control" name= "description" placeholder="description" rows="3" required></textarea><br>
    <input type="file" class="form-control-file" name="imageToUpload" required>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>