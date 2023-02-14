<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php"class="text-light">ADD</a></button>
        <button class="btn btn-primary my-5"><a href="search.php? searchid='.$name.'"class="text-light">SEARCH</a></button>
        <button class="btn btn-danger my-5"><a href="delete.php? deleteid='.$name.'"class="text-light">DELETE</a></button>

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
$sql="SELECT * FROM `equipment`";
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
    
}




?>

    
  </tbody>
</table>
    </div>
</body>
</html>