<?php
 session_start();
 include('regclass.php');
 $obj=new register;
 $obj->connect('localhost','root','','oose','oosetable')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>post question</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
<center>
	<div id="nav">
<?php 
   //session_start();
extract($_POST);
if(isset($register))
	
{    $user_id=$_SESSION['user_id'];
     //$_SESSION['user_id']=$user_id;
    //$user_id=$_GET['user_id'];
  $inserts1="insert into oosetable(sid,question) values('$user_id','$ques')";
  
  $obj->post($inserts1);
  
}  
	?>
	
	<br><br>
<a href="smain.php">Go To Main Page</a>
<br>
<br>
	</div>
</body>
</html>