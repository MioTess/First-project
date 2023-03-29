<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Мэдээ оруулах</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Админ-Сайн байна уу ?</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Үндсэн цэс</a></li>
      <li ><a href="setgegdel.php">Сэтгэгдэл үзэх</a></li>
      <li class="active"><a href="medee.php">Мэдээ үзэх</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Сонирхолтой зүйлс
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Зураг</a></li>
          <li><a href="#">Үгс</a></li>
        </ul>
      </li>
    </ul>
    <button class="btn btn-danger navbar-btn"  ><a href="index.php" class="link-light" style = "color : white">Гарах</a></button>
  </div>
</nav>
 <br>

<!--Medee-->

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Таны оруулсан мэдээлэл</h3>

      <table class="table">
  <thead>
   <tr>
      <th scope="col">ID</th>
      <th scope="col">Гарчиг</th>
      <th scope="col">Мэдээ</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include 'medeeGargah.php';
    ?>
    </tbody>
    </div>
    <div class="col-sm-6">
      <h3>Шинэ мэдээлэл</h3>
      <textarea class="form-control" rows="13" id="comment" name="comment"></textarea> <br>
      <input type="submit" value="Илгээх" class ="btn-primary" name="submit" style ="margin-left: 4cm">
    </div>
  </div>
</div>

</body>
</html>