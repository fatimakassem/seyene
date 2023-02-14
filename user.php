<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $driver=$_POST['driver'];
    $added=$_POST['added'];
    $sabab=$_POST['sabab'];
    $seyene=$_POST['seyene'];
    $kotaa=$_POST['kotaa'];
    $masdar=$_POST['masdar'];
    $nawaa=$_POST['nawaa'];


    $sql="INSERT INTO `equipment`(`name`, `date`, `driver`, `added`, `sabab`, `seyene`, `kotaa`, `masdar`) VALUES ('$name','$date','$driver',$added,'$sabab','$seyene','$kotaa','$masdar');";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data saved";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}





?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Equipment</title>
  </head>
  <body>
<div class="container my-5" >


<form method="post">
  <div class="mb-3">
    <label>اسم الالية</label>
    <input type="text" class="form-control" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>التاريخ</label>
    <input type="text" class="form-control" name="date" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>اسم السائق</label>
    <input type="text" class="form-control" name="driver" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>العداد</label>
    <input type="number" class="form-control" name="added" autocomplete="off">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" name="nawaa" value="value">صيانة دورية</label>
  </div>
  <div class="mb-3">
    <label>سبب العطل</label>
    <input type="text" class="form-control" name="sabab" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>الصيانة المنفذة</label>
    <input type="text" class="form-control" name="seyene" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>القطع المستبدلة</label>
    <input type="text" class="form-control" name="kotaa" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>مصدر القطع</label>
    <input type="text" class="form-control" name="masdar" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

   
  </body>
</html>