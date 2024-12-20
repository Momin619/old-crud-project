<?php


$name=$_POST['name'];
$class=$_POST['class'];
$age=$_POST['age'];
$address=$_POST['address'];


$conn =mysqli_connect('localhost','root','','test');


$ins ="INSERT INTO school (name,class,age,address) VALUES ('{$name}','{$class}',$age,'{$address}')";

$query =  mysqli_query($conn,$ins);

header("Location: http://localhost/data/?name=&class=&age=&address=");
exit();



?>