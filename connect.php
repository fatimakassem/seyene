<?php
$con=new mysqli('localhost','root','','seyene');

if(!$con){
  
    die(mysqli_error($con));
}
?>