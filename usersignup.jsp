<!DOCTYPE HTML>
<html>
<head>
<title>Sign UP</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body><div align="center"><h1>Registration form</h1><br></div>
<div id="nav">
Select Teacher/Student:
<select name="Teacher/Student" onchange="la(this.value)">
<option disabled selected>--Select--</option>
<option value="tsignup.jsp">teacher</option>
<option value="ssignup.jsp">student</option>
</select><br>
FName:<input type="text" size="20" value="FirstName"><br>
LName:<input type="text" size="20" value="LastName"><br>
EMail:<input type="text" placeholder="Email" name="email"><br>
PassWord:<input type="password" placeholder="Enter Password" name="pwd"><br>
PhnNo.:<input type="text" placeholder="Mobile No." name="mbno"><br>
Gender:<br><input type="radio" value="male" name="gender">Male
<input type="radio" value="female" name="gender">Female<br>
<input type="submit" value="REGISTER" name="reg">
</div>
</body>
</html>
<script>
function la(src)
{
 window.location=src;
}
</script>
