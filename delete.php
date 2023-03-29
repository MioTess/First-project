<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM burtgeh WHERE BurtgelID= $id";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:admin.php');
    }else{
        die(mysqli_errno($con));
    }
}
?>