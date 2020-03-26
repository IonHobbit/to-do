<?php

include('config.php');

$login_button = '';

if (!isset($_SESSION['access_token'])) {
    //Create a URL to obtain user authorization
    $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="sign-in-with-google.png" /></a>';
} else {
    $login_button = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="forms">
        <form action="signupform.php" class="form1" method="POST" enctype="multipart/form-data">

            <!-- <button type="button" class="btn btn-default"><a href="welcome.html">Sign Up with Google</a></button> -->
            <?php
            if ($login_button == '') {
                echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                echo '<img src="' . $_SESSION["image"] . '" class="img-responsive img-circle img-thumbnail" />';
                echo '<h3><b>Name :</b> ' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</h3>';
                echo '<h3><b>Email :</b> ' . $_SESSION['email_address'] . '</h3>';
                echo '<h3><a href="logout.php">Logout</h3></div>';
            } else {
                echo '<div align="center">' . $login_button . '</div>';
                $_SESSION["google"] = $login_button;
            }   
            ?>

            <br><br>
            or <br><br>
            <div class="first_name">
                <label for="first_name">First Name</label><br>
                <input type="text" placeholder="Enter your First Name" name="first_name">
            </div>

            <div class="last_name">
                <label for="last_name">Last Name</label><br>
                <input type="text" placeholder="Enter your Last Name" name="last_name">
            </div>

            <div class="email">
                <label for="email">Email</label><br>
                <input type="email" placeholder="Enter your Email" name="email">
            </div>

            <div class="password">
                <label for="password">Password</label><br>
                <input type="password" placeholder="Enter your Password" name="password">
            </div>


            <br>
            <button type="submit" class="btn btn-default" name="reg_user">Create Account</button>

            <br>
            <br>

            Already have an account? Click <a href="login.php">here</a> to login.

        </form>
    </div>

</body>

</html>