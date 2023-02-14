

<table class="table">
  <thead>
    <tr>
      <th scope="col">اسم الالية</th>
      <th scope="col">التاريخ</th>
      <th scope="col">اسم السائق</th>
      <th scope="col">العداد</th>
      <th scope="col">سبب العطل</th>
      <th scope="col">الصيانة المنفذة</th>
      <th scope="col">القطع المستبدلة</th>
      <th scope="col">مصدر القطع</th>
      
    </tr>
  </thead>
  <tbody>


<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    


    $sql="SELECT `name`, `date`, `driver`, `added`, `sabab`, `seyene`, `kotaa`, `masdar` FROM `equipment` WHERE name='$name';";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['name'];
            $date=$row['date'];
            $driver=$row['driver'];
            $added=$row['added'];
            $sabab=$row['sabab'];
            $seyene=$row['seyene'];
            $kotaa=$row['kotaa'];
            $masdar=$row['masdar'];
           
           
            echo '<tr>
            <th scope="row">'.$name.'</th>
            <td>'.$date.'</td>
            <td>'.$driver.'</td>
            <td>'.$added.'</td>
            <td>'.$sabab.'</td>
            <td>'.$seyene.'</td>
            <td>'.$kotaa.'</td>
            <td>'.$masdar.'</td>
            
          </tr>';
    
          
         
        }
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
 
  <button type="submit" class="btn btn-primary" name="submit">Search</button>
</form>
</div>

   

</tbody>
</table>
    </div>
</body>
</html>