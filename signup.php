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

            <button type="button" class="btn btn-default"><a href="#">Sign Up with Google</a></button>

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