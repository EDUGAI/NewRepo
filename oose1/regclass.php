<?php

  class database
  {  
      public $connection;
	// private $table;
	
	 function connect($host,$username,$password,$database,$table)
	 {                 $this->connection = mysqli_connect($host, $username, $password,$database);
         	 
		}
		

  }
	 class register extends database
	 {
		  function insert($data)
		{   
		   $name=$this->connection->query($data);
		     
			 if($name)
				 
			 {  echo "<br><br><br>";
			    echo "registered succesfully ";
				
		  //header('Location:index.html');
			 }
			 else
			 { echo "not registered";
		 }
		 
		  }
		  function logs($data)
		  { $name=$this->connection->query($data);
		  }
		  
		  function post($data)
		  {
			  
			  $name=$this->connection->query($data);
		     
			 if($name)
				 
			 {  echo "<br><br><br>";
			    echo " Question Posted successfully ";
				
		  //header('Location:index.html');
			 }
			 else
			 { 
		           echo "not posted";
		 }
		 
		}
		
		function posta($data)
		  {
			  
			  $name=$this->connection->query($data);
		     
			 if($name)
				 
			 {  echo "<br><br><br>";
			    echo " Answer Posted successfully ";
				
		  //header('Location:index.html');
			 }
			 else
			 { 
		           echo "not posted";
		 }
		 
		}
		
		
		
		
	 }
  ?>
  
  
  
  
  
  
  
  
  
		   