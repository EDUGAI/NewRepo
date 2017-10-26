<!DOCTYPE HTML>
<html>
<head>
    <title>view question</title>
    <Link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <div id="nav"><br>
	<h1>The questions for oose subject are:</h1>
	
	
	
	</body>
</html>



<?php

 $servername = "localhost";
  $username = "root";
$password = "";
$dbname = "oose";
           
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM oosetable";

$mysqlresult=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($mysqlresbult,MYSQLI_ASSOC);
$count=mysqli_num_rows($mysqlresult);

     ?>

<center>

  <form method="post"  align="left">
    <?php
      if( $count==0 ){
        echo '<tr><td>No Data to Display</td></tr>';
      }
	  else
	  {
      
       
        while( $row =mysqli_fetch_assoc( $mysqlresult ) )                             
        
		{
 echo "<tr><td></td><td>{$row['qid']}</td><td>)</td><td style='font-size:20px;'>{$row['question']}</td></tr><br><br>";
	  }
	  }
    
	  
    ?>
	
	

	</form>
	 <a href="postans.php"><input type= "buttton" placeholder="post answer"></a>
</center>