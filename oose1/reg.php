<?php
 include('regclass.php');
 $obj=new register;
 $obj->connect('localhost','root','','oose','register')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>student register</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<center>
	<div id="nav">
<?php 
   
extract($_POST);
if(isset($register))
	
{  
    

$inserts="insert into register values('$user_id','$email','$password','$mbno','$gender','$menu')";
  
  $obj->insert($inserts);
  
  $insert="insert into login values('$user_id','$password')";
 $obj->logs($insert);
  
  
  
 
}  
	?>
<br><br>
<a href="index.html">Go To Main Page</a>
<br><br>
	</div>

</body>
</html>