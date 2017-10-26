<?php
  
 include('db.php');
 $obj=new database;
 $obj->connect('localhost','root','','oose','login')
 ?>
 
 <html>
 <head>
 
 <title>student login</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">

 </head>
 <body>
<?php 
session_start();
 //$_SESSION['user_id']=$user_id;
 
if(isset($_POST['submit']))
{  if($obj->login($_POST['user_id'],$_POST['password']))
	{  
        $_SESSION['user_id']=$_POST['user_id'];
		 
         header('Location:smain.php');
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