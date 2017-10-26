<?php
 include('adclass.php');
 $obj=new database;
 $obj->connect('localhost','root','','oose','login')
 ?>


<!DOCTYPE HTML>
<html>
<head>
<title> teacher login</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
<?php 
if(isset($_POST['submit']))
{  
     if($obj->login($_POST['user_id'],$_POST['password']))
	{  
        header('Location:adminmain.jsp');
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