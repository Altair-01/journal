<?php
include 'connect.php';
include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Journal BI</title>
</head>
<body>


   
<table class="table">
 
  <?php 
  
    $sql="SELECT * from `Categorie`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $libelle = $row['libelle'];
            
            
            echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$libelle.'</td>                
            </tr>
            ';
        }
    }
  
  
  ?>
 

   
</table>
    
    </div>

</body>
</html>