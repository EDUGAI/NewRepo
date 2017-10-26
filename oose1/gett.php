<!DOCTYPE HTML>
<html>
<head>
    <title>view answer</title>
    <Link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <div id="nav"><br>
	<h3>The questions answered by teachers:</h3>
	</body>
</html>



<?php
 session_start();
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
 $user_id=$_SESSION['user_id'];
//$sql="SELECT qid,answer from ooseanstable  where qid in (select qid from oose where sid='$user_id')";
 $sql="select qid,tid from ooseanstable";
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
 echo "<tr><td>{$row['qid']}</td><td>)</td><td>{$row['tid']}</td><br><br>";
 //<td>{$row['answer']}</td></tr><br><br>";


 
	  }
	  }
       echo "<a href='smain.php'>Go to Home page</a>";
	  echo "<br><br>";
    ?>
	
	

	</form>
	
</center>