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
    <link rel="stylesheet" href="./style.css">

    <title>Journal BI</title>
</head>
<body>


   
<table class="table">
 
  <?php 
  
    $sql="SELECT * from `Article`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $titre = $row['titre'];
            $contenu = $row['contenu'];
            $dateCreation = $row['dateCreation'];
            $dateModification = $row['dateModification'];
            
            echo '
            <tr>
                <td><h1>'.$titre.'</h1></td>
            </tr>
            <tr>
                <td class="contenu">'.$contenu.'</td>
            </tr>
            <tr>
                <td class="date">'.$dateCreation.'</td>
            </tr>
            ';
        }
    }
  
  
  ?>
 

   
</table>
    
    </div>

</body>
</html>