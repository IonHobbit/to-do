<?php

function OpenCon() {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "to_do";


   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

   if ($conn->connect_error) {
      die("Connect failed: " . $conn->connect_error);
   }

   return $conn;
}
 
function CloseCon($conn) {
   $conn->close();
}
   
?>