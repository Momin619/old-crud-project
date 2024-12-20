<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$id = $_GET['id'];
$connn3 = mysqli_connect('localhost','root','','test');
$i = "SELECT * FROM school WHERE id =$id";

   $result1  =   mysqli_query($connn3,$i);
   $row = mysqli_fetch_assoc($result1);
   $name = $row["name"];
   $class = $row["class"];
   $age = $row["age"];
   $address = $row["address"];



?>


<div class="container">
    <h1 class="text-center text-capitalize fw-bold">Update data</h1>

<form action="./update-data.php" class="d-flex flex-column text-capitalize"  method="POST">
<input  type="hidden" name="id"     class="form-control"  value="<?php  echo $row['id']?>">
<label for="">name</label>
<input  type="text" name="name"     class="form-control"  value="<?php  echo $row['name']?>">
<label for="">class</label>
<input  type="text" name="class"    class="form-control"  value="<?php  echo $row['class']?>">
<label for="">age</label>
<input  type="number" name="age"    class="form-control"  value="<?php  echo $row['age']?>">
<label for="">address</label>
<input  type="text" name="address" class="form-control"     value="<?php  echo $row['address']?>">


<button style="width: 20%; " class="btn btn-success text-white text-capitalize mx-auto fw-bold my-2 ">Update Data</button>

</form>
</div>



</body>
</html>