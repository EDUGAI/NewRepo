<?php
 include('regclass.php');
 $obj=new register;
 $obj->connect('localhost','root','','oose','tregister')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>teacher register</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<center>
	<div id="nav">
<?php 
   
extract($_POST);
if(isset($register))
	
{  
  
  $inserts1="insert into tregister values('$user_id','$email','$password','$mbno','$gender','$accno','$cardno','$cvv')";
  $obj->insert($inserts1);
  
  $inserts ="insert into tlogin values('$user_id','$password')";
  $obj->logs($inserts);
  
  
  
  
}  
	?>
	<br><br>
<a href="index.html">Go To Main Page</a>
<br>
<br>
	</div>

</body>
</html>