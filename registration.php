<?php
 require('server.php');
 
$errors = array();

 if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        
        $email = $_POST['email'];
        // $username = $_POST['username'];
        $password = $_POST['password'];

        


        // if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        


        // if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        



        //if ($password_1 != $password_2) {
       // array_push($errors, "The two passwords do not match");
       // }
       
    // $user_check_query = "SELECT * FROM userdetails WHERE username='$username' OR email='$email' LIMIT 1";
    // $result = mysqli_query($db, $user_check_query);
    // $user = mysqli_fetch_assoc($result);
    
    // if ($user) { 
    //     if ($user['username'] == $username || $user['email'] == $email) {
    //     array_push($errors, "Users already exists");
    //     }
    // }
    
    // else {
       
        $passwordd = md5($password); // password encrytion
    
        $query = "INSERT INTO users (id, username, email, password) VALUES ('', '$username', '$email', '$passwordd')";

        if(mysqli_query($db, $query)){
            echo "Records inserted successfully.";
            $_SESSION['username'] = $username;
            $_SESSION['success']  = "You are now logged in";
            header('location:home.html');
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
        }
    
        
    // }
   
    }

    ?>