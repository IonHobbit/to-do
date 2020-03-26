<?php
session_start();

$servername = "localhost";
$usern = "root";
$password = "";
$dbname = "registration";

$db = new mysqli($servername, $usern, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
 }
 else {
    echo "";
}

// $sql = "INSERT INTO userdetails (id, username, email, password, gender, profilePic) VALUES ('','Tobi','ishoshot@gmail.com', '123123', 'female', '')";

//    if(mysqli_query($db, $sql)){
//       echo "Records inserted successfully.";
//    } else{
//       echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
//    }

?>

