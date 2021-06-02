<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Login form</title>
<link rel="stylesheet" href="slogin.css">
<style>
div#nav > ul
{
margin:0px;
paddind:0px;
list-style-type:none;
background-color:black;
}
div#nav > ul > li
{
float:left;
}
div#nav > ul::after
{
content: " ";
display:block;
clear:left;
}
div#nav > ul > li > a
{
text-decoration:none;
background-color:black;
color:white;
display:inline-block;
height:50px;
width:150px;
text-align:center;
line-height:50px;
font-family:Tahoma;
}
div#nav > ul > li > a:hover
{
background-color:lightgray;
color:black;
}

</style>
</head>
<body style="background-image:url('bb.jpg')"
     "background-repeat: no-repeat;"
  "background-attachment: fixed;"
  "background-size: cover;">
<div id="nav">
<ul>
<li><a href="website.html">Home</a></li>
<li><a href="whatblood.html">Most needed Blood</a></li>
<li><a href="camp.html">Camp</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="register1.html">Register</a></li>
<li><a href="login.html">Login</a></li>
</ul>
</div><br><br>
<?php
$servername = "localhost";
$username = "harshitp_ajith";
$password = "Ajith@123";
$dbname = "harshitp_ajith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$bg=$_POST['blood'];
$sql = "SELECT * FROM registration where blood=$bg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "NAME: " . $row["names"]."; Mail id: " . $row["mail"]. "; Town " . $row["town"]. "; State: " . $row["stt"]. "; Mobile number " . $row["tele"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>