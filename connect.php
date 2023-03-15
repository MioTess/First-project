<?php
$con = new mysqli('localhost','root','','lab');

if(!$con){
    die(mysqli_error($con));
}
?>