<?php
 include('db.php');
 $obj=new loginmanager;
 $obj->connect('localhost','root','','oose','login')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
<?php 
if(isset($_POST['submit']))
{  
     if($obj->login($_POST['user_id'],$_POST['password']))
	{  
        header('Location:index.html');
		 }
		 else 
		 {  echo($obj->loginform());
	         echo("<h6>wrong details</h6>");
		 }
	}
	else 
	{   echo($obj->loginform());
	}
	?>
</body>
</html>