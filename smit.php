<?php
$servername = "localhost";
$username = "harshitp_ajith";
$password = "Ajith@123";

// Create connection
$conn = new mysqli($servername, $username, $password,"harshitp_ajith");

// Check connectionstate
$sql = "INSERT INTO registration (names,mail,town,stt,pin,blood,last,yrs,sex,tele)
VALUES ('".$_POST['uname']."','".$_POST['uId']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."','".$_POST['bg']."','".$_POST['date']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['mblno']."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:website.html");
?>