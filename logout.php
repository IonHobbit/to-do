<?php

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header("Location: home.html");

?>