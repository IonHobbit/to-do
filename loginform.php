<?php
    include 'db_connection.php';

    $credential1 = $_POST[email];
    $credential2 = $_POST[password];

    function login($credential1, $credential2) {

        session_start();

        $conn = OpenCon();

        $sql = "SELECT * FROM user WHERE email='$credential1' && password='$credential2';";

        if ($user = $conn->query($sql)) {
            if ($user->num_rows > 0) {
                while($info = $user->fetch_assoc()) {
                    $_SESSION['first_name'] = $info["first_name"];
                    $_SESSION['last_name'] = $info["last_name"];
                    $_SESSION['email'] = $info["email"];
                    header("Location: ./welcome.php");
                }
            } else {
                header("Location: ./login.php");
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

        CloseCon($conn);
    }

    login($credential1, $credential2);
    

?>