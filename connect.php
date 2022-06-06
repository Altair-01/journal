<?php

$con=new mysqli('localhost','mglsi_user','passer','mglsi_news');

if($con){
 
}else{
    die(mysqli_error($con));
}

?>