<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incubation-ciie</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/incubation.css">
</head>
<body>
    <div class="container">
        <?php require 'require/header.php';?>

        <?php require 'require/nav.php';?>

        <main>
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
        </main>

        <?php require 'require/footer.php';?>
    </div>
    
</body>
</html>
<!-- 
@developed for CIIE iitIsm
@backend by death  
--> 