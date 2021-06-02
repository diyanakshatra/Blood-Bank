<?php
$servername = "localhost";
$username = "harshitp_ajith";
$password = "Ajith@123";

// Create connection
$conn = new mysqli($servername, $username, $password,"harshitp_ajith");

// Check connectionstate
$sql = "INSERT INTO feedback (nm,mid,sub,feed)
VALUES ('".$_POST['name']."','".$_POST['mail']."','".$_POST['sbt']."','".$_POST['give']."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:website.html");
?>