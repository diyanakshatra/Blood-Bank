<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet" href="sregister.css">

<script> 
function validate()                                    
{ 
    var name = document.forms["RegForm"]["u_name"];               
    var email = document.forms["RegForm"]["u_Id"]; 
    var pincode = document.forms["RegForm"]["pin"]; 
    var bloodgroup = document.forms["RegForm"]["bg"]; 
    var age = document.forms["RegForm"]["age"]; 
    var city =  document.forms["RegForm"]["city"];  
    var state = document.forms["RegForm"]["state"];  
    var mobile = document.forms["RegForm"]["mblno"]; 
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    }    
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }   
    if (city.value == "")                        
    { 
        window.alert("Please enter your city"); 
        city.focus(); 
        return false; 
    } 
    if (state.value == "")                               
    { 
        window.alert("Please enter your state."); 
        state.focus(); 
        return false; 
    } 
   
    if (bloodgroup.value == "")                        
    { 
        window.alert("Please enter your bloodgroup"); 
        bloodgroup.focus(); 
        return false; 
    } 

    if (age.value == "")                        
    { 
        window.alert("Please enter your age"); 
        age.focus(); 
        return false; 
    } 

    if (mobile.value == "")                           
    { 
        window.alert("Please enter your mobile number."); 
        mobile.focus(); 
        return false; 
    }  
	else if (!(mobile.value.length == 10))
	{
		alert("Please enter 10 digit mobile no.");
		mobile.value = "";
		mobile.focus();
		return false;
	}

   
    if (pincode.value== "")                  
    { 
        alert("Please enter correct pincode."); 
        pincode.focus(); 
        return false; 
    }
	else if (!(pincode.value.length == 6))
	{
		alert("Please enter 6 digit valid pincode");
		pincode.value = "";
		pincode.focus();
		return false;
	}
   
    return true; 
}</script> 

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
<body style="background-image:url('bb.jpg')">
<div id="nav">
<ul>
<li><a href="website.html">Home</a></li>
<li><a href="whatblood.html">Most needed Blood</a></li>
<li><a href="#">Camp</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="login.html">Login</a></li>
</ul>
</div><br><br>
<h2>Donar Registration Form</h2><br>
<form name="RegForm" action="smit.php" onsubmit="return validate()" method="post">
<table align="center" cellpadding="10">
<tr>
<td>Name:*</td>
<td><input type="text"  id="1" name="uname" placeholder="Name" value=" " /><br><br></td>
</tr>
<tr>
<td>
E-Mail Id:*</td>
<td>
<input type="email" id="2" name="uId" placeholder="E-Mail Id" value=" "/><br><br></td>
</tr>
<tr>
<td>City/District*:</td>
<td><input type="text"  id="3" name="city" placeholder="City/District" value=" " /><br><br></td>
</tr>
<tr>
<td>State*:</td>
<td><input type="number"  id="4" name="state" placeholder="State" value=" "/><br><br></td>
</tr>
<tr>
<td>Pincode*:</td>
<td><input type="text"  id="5" name="pin" placeholder="Pin" value=" "/><br><br></td>
</tr>
<tr>
<td>Blood Group*:</td>
<td><input type="text"  id="6" name="bg" placeholder="Blood group" value=" "/><br><br></td>
</tr>
<tr>
<td>Last Blood Donated*:</td>
<td><input type="date"  id="7" name="date" placeholder="Date" value=" "/><br><br></td>
</tr>
<tr>
<td>Age*:</td>
<td><input type="number"  id="8" name="age" placeholder="Age" value=" "/><br><br></td>
</tr>
<tr>
<td>Gender*:</td>
<td><input type="radio" id="9" name="gender" value="Male">Male</input>
<input type="radio"  id="9" name="gender" value="Female">Female</input><br><br></td>
</td>
<tr>
<td>Mobile Number*:</td>
<td><input type="tel"  id="10" name="mblno" placeholder="Mobile Number" value=" "/><br><br></td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="" value="Register"><br><br></td>
</tr>
</table>
</form></body>
</html>