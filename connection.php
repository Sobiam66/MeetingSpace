<?php
$servername = "localhost";
$username = "jnesttec_meeting";
$password = "meetingspace123_";
$dbname = "jnesttec_meetingspace";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $conn->close();

?>