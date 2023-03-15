<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="css.css">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>Document</title></head>
    <body>
        <form class="form card" action=""  method = "POST" style="margin-left: 14cm;margin-top: 4.5cm;">
            <div class="card_header">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"></path>
              </svg>
              <h1 class="form_heading">Нэвтрэх</h1>
            </div>
            <div class="field">
              <label for="username">Username</label>
              <input class="input" name="username" type="text" placeholder="Username" id="username">
            </div>
            <div class="field">
              <label for="password">Password</label>
              <input class="input" name="user_password" type="password" placeholder="Password" id="password">
            </div>
            <div class="field">
              <button class="button"  type = "submit" name="submit" >Login</button>
            </div>
            <div class="field">
              <button class="button"><a href="signn.php">Sign up</a></button>
            </div>
          </form>
          <!-- Log in PHP-->
          <?php
          session_start();
          include 'connect.php';

        if(isset($_POST['username']) && isset($_POST['user_password'])) {
          $uname = ($_POST['username']);
          $pass = ($_POST['user_password']);
          if(empty($uname)){
            echo "Таны нууц үг буруу байна";
          }elseif(empty($pass)){
             echo "Нууц үгээ зөв оруулна уу ";
          }
          else{
            $sql= "SELECT * FROM burtgeh WHERE Ner = '$uname' and NuutsUg = '$pass'";
            $result = mysqli_query($con,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $Sname = $row['Ner'];
                $Spass = $row['NuutsUg'];
            }
            if($Sname == $uname){
              $Sname = true ; 
            }
            if($Sname && $Spass == $pass){
              header("Location: login.php");
              $_SESSION['id_user'] = $pass;
              echo $_SESSION['id_user'];
            }
            if($Sname == 'admin'){
              $Sname = true;
            }
            if($Sname && $Spass == 'admin'){
              header("Location: admin.php");

            }
          }
        }
      }
          ?>
    </body>
</html>