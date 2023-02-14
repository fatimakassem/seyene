<?php
include'connect.php';
if(isset($_GET['deleteid'])){
    $name=$_GET['deleteid'];

    $sql="DELETE FROM `equipment`";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>