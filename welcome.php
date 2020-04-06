<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>




<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">to-do</a>
      </div>
      <ul class="nav navbar-nav" style="float: right;">
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="container" id="big">
    <p>
      Welcome <?php session_start();$name = $_SESSION['first_name'];echo $name;
      include 'calendar.php';
      $calender = new Calender();
      echo $calender->show();
      ?>!
    </p>
    <p> Are you ready to get your life together? </p>
    <button type="button" class="btn btn-default"><a href="./calendar.php">let's go</a></button>
  </div>

</body>

</html>