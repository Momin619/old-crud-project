<?php


$id = $_GET['id'];


$co = mysqli_connect('localhost','root','','test');

$insert ="DELETE FROM school WHERE id = $id";


$execute = mysqli_query($co,$insert);



?>