<?php

  class database
  {  
      public $connection;
	// private $table;
	
	 function connect($host,$username,$password,$database,$table)
	 {                 $this->connection = mysqli_connect($host, $username, $password,$database);
         	 
		}
		
		function loginform()
		{  
		return ('<div id="nav"><br><br><br><h1>LOGIN FORM</h1><br><br><center><form action="" method="post" >
		<table>
		<tr><td>name</td>
		<td><input type="text" name="user_id"></td></tr>
		<tr><td>password</td>
		<td><input type="password" name="password"></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="submit"></table>
		</form><center> ');
		}
  
		
		
		  public function login($username,$password)
		{   
		   $query="select * from login where user_id='$username' and password='$password'";
		  
		   //$result=mysqli_query($query);
		   //$numrows=mysqli_num_rows($result);
		  //return !($numrows==0);		
		  
		   $mysqlresult=mysqli_query($this->connection, $query);

                $count=mysqli_num_rows($mysqlresult);


                     $row =mysqli_fetch_assoc($mysqlresult);
                  
		  return !($row==0);
		} 
		  
  }
  
  ?>
		   