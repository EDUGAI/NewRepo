<!DOCTYPE HTML>
<html>
<head>
<title>Sign UP</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
<div align="center"><h1>Registration form</h1><br></div>
<div id="nav">
<center>
<h1>Welcome to Student SignUP</h1><br><center>
<form action="reg.php" method="post"><table>

<tr>
<td>User Name:
<input type="text"  name="user_id"></td></tr>
<tr>
<td>EMail:
<input type="email"  name="email"></td></tr>
<tr>
<td>PassWord:<input type="password"  name="password"></td></tr>
<tr>
<td>Phone No.:<input type="number"  name="mbno"></td></tr>
<tr>
<td>Gender:
<input type="radio" value="male" name="gender">Male
<input type="radio" value="female" name="gender">Female</td></tr>
<tr><td>Qualification:
<select name="menu">
<option disabled selected>--Select--</option>
<option value="btech">B.E/B.Tech</option>
<option value="12th">12th Std.</option>
<option value="10th">10th Std.</option>
</select></td></tr>
<tr><td><input type="submit" value="REGISTER" name="register"></td></tr>
</table></form></center>
</center>
</div>
</body>
</html>
