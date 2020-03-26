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
        <form action="login.php" class="form1" method="POST" enctype="multipart/form-data">

            <div class="email">
                <label for="email">Email</label><br>
                <input type="email" placeholder="Enter your Email" name="email">
            </div>

            <div class="password">
                <label for="password">Password</label><br>
                <input type="password" placeholder="Enter your Password" name="password">
            </div>

            <input type="submit" name="login" value="Log in" /> <br>

            <br>

            Don't have an account? Click <a href="signup.php">here</a> to register. <br><br>
            Click <a href="home.html">here</a> if you've forgotten your password.

        </form>
    </div>

</body>

</html>