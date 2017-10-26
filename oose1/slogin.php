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
if(isset($_POST['submit']))
{  if($obj->login($_POST['username'],$_POST['password']))
	{  
         echo("<h1'>you r stupd</h1>");
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