<?php
$servername = "localhost";
$username = "jnesttec_meeting";
$password = "meetingspace123_";
$dbname = "jnesttec_meetingspace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $conn->close();



// $sql = "INSERT INTO `users`(`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES(1,'Sobia','Mughal','kuchbhi@gmail.com','user','123')";
// if ($conn->query($sql) === TRUE) {
    // echo "Inserted created successfully";
// } else {
    // echo "Error creating table: " . $conn->error;
// }

// $conn->close();


?>