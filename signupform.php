<?php
    include 'db_connection.php';

    session_start();

    $conn = OpenCon();

    $sql = "INSERT INTO user (first_name, last_name, password, email)
    VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[password]','$_POST[email]')";
    
    $_SESSION['first_name'] = $_POST['first_name'];

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ./welcome.php");
        CloseCon($conn);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);

?>