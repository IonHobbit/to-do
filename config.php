<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'C:/xampp/php/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('732250484957-tukqd7t2pj7v9ojomoq6o8cranbhcdtu.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('0TeHOcO7plJn-FwhC01XkyM6');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/sdp_draft/welcome.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>