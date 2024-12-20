<?php



$id_1 = $_POST['id'];


$name = $_POST['name'];
$class = $_POST['class'];
$age = $_POST['age'];
$address = $_POST['address'];

$con = mysqli_connect('localhost','root','','test');
$in  = "UPDATE school SET name = '{$name}' , class = '{$class}' , age = $age , address = '{$address}' WHERE id =$id_1";

 mysqli_query($con,$in);


?>