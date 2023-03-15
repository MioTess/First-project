<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Хэрэглэгч - Сайн байна уу ?</a>
    </div>
    <ul class="nav navbar-nav">
      <li  class="active"><a href="#">Үндсэн цэс</a></li>
      <li><a href="setgegdel.php">Сэтгэгдэл үзэх</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Сонирхолтой зүйлс
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Зураг</a></li>
          <li><a href="#">Үгс</a></li>
        </ul>
      </li>
    </ul>
    
  </div>
</nav>

<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $comment = $_POST['comment'];
$sql = "INSERT INTO comment (comment) VALUES('$comment');";
$result= mysqli_query($con,$sql);
if($result){
    echo "Data insert succesful";
}
}
?>

<div class="container">
  <div class="jumbotron">
  <h2>Таны сэтгэгдэл бүр бидэнд үнэ цэнтэй</h2>
  <p>Сэтгэгдэл үлдээсэн танд баярлалаа</p>

  <form action = "" method="POST">
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
      <input type="submit" value="Илгээх" class ="btn-primary" name="submit">
    </div>
  </form>

  </div>
</div>
</body>
</html>