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
      <a class="navbar-brand" href="#">Админ-Сайн байна уу ?</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Үндсэн цэс</a></li>
      <li class="active"><a href="setgegdel.php">Сэтгэгдэл үзэх</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Сонирхолтой зүйлс
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Зураг</a></li>
          <li><a href="#">Үгс</a></li>
        </ul>
      </li>
    </ul>
    <button class="btn btn-danger navbar-btn">Гарах</button>
  </div>
</nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Бидэнд ирсэн сэтгэгдлүүд</h1>
            <?php
            include 'connect.php';
            $sql = "SELECT * FROM comment";
            $result = mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $comment = $row['comment'];
                    echo ' <p>'.$comment.'</p>';
                }
                
            }
            ?>
           
        </div>
    </div>

</body>
</html>