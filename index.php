<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
  
<div class="container">
    <h1 class="text-center fw-bold text-capitalize">Add data</h1>
<form action="./data.php" class="d-flex flex-column text-capitalize"  method="POST">

<label for="">name</label>
<input type="text" name="name">
<label for="">class</label>
<input type="text" name="class">
<label for="">age</label>
<input type="number" name="age">
<label for="">address</label>
<input type="text" name="address">


<button style="width: 20%; " class="btn btn-success text-white text-capitalize mx-auto fw-bold my-2 ">add data</button>

</form>
</div>

<table class="w-100 mx-5 my-5 text-capitalize " >
    <thead class="">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>class</th>
            <th>age</th>
            <th>address</th>
            <th>delete</th>
            <th>update</th>
        </tr>
    </thead>
    <tbody>






        <?php

$connection = mysqli_connect('localhost','root','','test');
$q = "SELECT * FROM  school";

$result= mysqli_query($connection,$q);





if(mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){
        ?>

        





<tr>
<td>  <?php echo $row['id']?>  </td>
<td>  <?php echo $row['name']?>  </td>
<td>  <?php echo $row['class']?>  </td>
<td>  <?php echo $row['age']?>  </td>
<td>  <?php echo $row['address']?>  </td>
<td><a href="./delete.php? id=<?php echo $row['id']?>"  class="btn btn-danger"> delete</a></td>

<td><a href="./update-form.php? id=<?php echo $row['id']?>"  class="btn btn-success">update</a></td>
</tr>







<?php
}
}

?>







    
    


    </tbody>
</table>



</body>
</html>