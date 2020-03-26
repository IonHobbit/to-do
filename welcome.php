<?php

//Include Configuration File
include('config.php');
$google = $_SESSION['google'];
if ($google == '') {
  session_destroy();
  include('signupform.php');
}


$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if (isset($_GET["code"])) {
  //It will Attempt to exchange a code for an valid authentication token.
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

  //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
  if (!isset($token['error'])) {
    //Set the access token used for requests
    $google_client->setAccessToken($token['access_token']);

    //Store "access_token" value in $_SESSION variable for future use.
    $_SESSION['access_token'] = $token['access_token'];

    //Create Object of Google Service OAuth 2 class
    $google_service = new Google_Service_Oauth2($google_client);

    //Get user profile data from google
    $data = $google_service->userinfo->get();

    //Below you can find Get profile data and store into $_SESSION variable
    if (!empty($data['given_name'])) {
      $_SESSION['first_name'] = $data['given_name'];
    }

    if (!empty($data['family_name'])) {
      $_SESSION['last_name'] = $data['family_name'];
    }

    if (!empty($data['email'])) {
      $_SESSION['email_address'] = $data['email'];
    }

    if (!empty($data['gender'])) {
      $_SESSION['gender'] = $data['gender'];
    }

    if (!empty($data['picture'])) {
      $_SESSION['image'] = $data['picture'];
    }
  }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if (!isset($_SESSION['access_token'])) {
  //Create a URL to obtain user authorization
  $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="sign-in-with-google.png" /></a>';
}

?>

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
        <a class="navbar-brand" href="home.html">to-do</a>
      </div>
      <ul class="nav navbar-nav" style="float: right;">
        <li><a href="login.php">login</a></li>
        <li><a href="signup.php">signup</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="container" id="big">
    <p>Welcome
      <?php

      $name = $_SESSION['first_name'];

      echo $name;

      ?>
      !
    </p>
    <p> Are you ready to get your life together? </p>
    <button type="button" class="btn btn-default"><a href="signup.php">let's go</a></button>
  </div>

</body>

</html>