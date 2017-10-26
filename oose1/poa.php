<?php
 include('regclass.php');
 $obj=new register;
 $obj->connect('localhost','root','','oose','ooseanstable')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>post answer</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
<center>
	<div id="nav">
<?php 
   session_start();
extract($_POST);
if(isset($register))
	
{  
    //$user_id=$_GET['user_id'];
	$user_id=$_SESSION['user_id'];
	
	
  $inserts1="insert into ooseanstable(tid,qid,answer) values('$user_id','$qid','$ans')";
  
  $obj->posta($inserts1);
  
  
  
  
  
  
}  
	?>
	
	<br><br>
<a href="tmain.php">Go To Main Page</a>
<br>
<br>
	</div>
</body>
</html>