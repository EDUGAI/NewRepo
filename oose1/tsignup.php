<!DOCTYPE HTML>
<html>
<head>
<title>Sign UP</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body><div align="center"><h1>Registration form</h1><br></div>
<div id="nav"><br>
<h1>Welcome to Teacher SignUP</h1><br>
<form action="treg.php" method="post"><table>

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
<tr><td><h6>Bank Details</h6></td></tr>
<tr><td>AccountNo:<input type="text" name="accno" placeholder="accno"></td><tr>
<tr><td>CardNo.:<input type="text"  name="cardno"  placeholder="16-digit no"></td></tr>
<tr><td>CVV:<input type="text" name="cvv" placeholder="cvv no"></td></tr>
<tr><td>
<input type="submit" value="REGISTER" name="register"></td></tr></table></form>
</div>
</body>
</html>
