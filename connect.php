<?php
$host = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // No password by default
$database = "tour"; // Replace with the name of your database
// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$fame = $_POST["fn"];
$lame = $_POST["ln"];
$email = $_POST["el"];
$subject = $_POST["sub"];
$msg= $_POST["message"];



// Insert data into the database
$sql = "INSERT INTO tourdb (tfname,tlname,temail,tsubject,tmessage) VALUES ('$fame', '$lame','$email','$subject','$msg')";

if ($conn->query($sql) === TRUE) {
    echo "Message recieved! We will get back to you soon!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>