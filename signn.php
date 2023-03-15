<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $nutsUg=$_POST['nuutsUg'];
    $Gmail=$_POST['Gmail'];
    $Huis = $_POST['Huis'];
    $Aimag=$_POST['Aimag'];
    $date=$_POST['TursunOgnoo'];
    $Utas=$_POST['Utas'];
    $sql="INSERT INTO burtgeh (Ner,Owog,NuutsUg,GmailHayg,Huis,Aimag,TursunOgnoo,Utas) 
    VALUES ('$firstName','$lastName','$nutsUg','$Gmail','$Huis','$Aimag','$date','$Utas')";
     $result=mysqli_query($con,$sql);
     if($result){
        echo "Data inserted successfull";
     }else {
        die(mysqli_error($con));
     }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include 'connect.php';
    if(isset($_POST['submit']))
    ?>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css.css">

    <title>Hello, world!</title>
    <style>
        body{
            background-color:#5f5f7c ;
        }
    </style>
  </head>
  <body>
       <!--Хэрэглэгч бүртгэх-->
      <div class="container"> 
       <form action="" method="post" style = "margin-left: 14cm;margin-top: 4.5cm;" class="form card">
       <div class="card_header">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"></path>
              </svg>
              <h1 class="form_heading">Бүртгэх</h1>
            </div>
            <div class="form-group">
               <input type="text"  name="first_name" placeholder="Нэрээ оруулна уу">
           </div>
       <div class="form-group">
               <input type="text"  name = "last_name"  placeholder="Овогоо оруулна уу">
           </div>
           
           <div class="form-group">
               <input type="text"  name="nuutsUg" placeholder="Нууц үг">
           </div>
           <div class="form-group">
               <input type="text" name="Gmail" placeholder="Майл хаяг">
           </div>
           <select name="Huis" required>
                <option value="1">Эм</option>
                <option value = "2">Эр</option>
            </select>
           <div class="form-group">
               <input type="text" name="Aimag" placeholder="Аймаг">
           </div>
           <div class="form-group">
               <input type="date" name="TursunOgnoo">
           </div>
           <div class="form-group">
               <input type="text" name="Utas" placeholder="Утас">
           </div>

           <div class="form-group">
               <button type="submit" class="field" name="submit">Бүртгэх</button>
           </div>
           <div class="form-group" style = "margin-bottom: 6cm; margin-right:13.5cm;" >
               <button type="submit" class="field" name="submit"><a href="index.php">Нэвтрэх</a></button>
           </div>
           
       </form>
   </div>   
    
  </body>
</html>