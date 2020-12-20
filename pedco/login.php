<?php  
include 'mainheader/dbcon.php';


$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 
 $error = "Username or Password is Invalid";
 }

 else

 {

 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];
	
 
$query = mysqli_query($conn,"SELECT username, password, level from login WHERE username= $username AND password=$password");
    //$rows = mysqli_num_rows($query);
    

    if($query == true) {


    	 header("location: dashboard.php");

}
    else{

    	header("location: add_farmer.php");

    	exit;
    }
      



/*
      $row = mysqli_fetch_array($query);
      $uid= $row["id"];
      $name= $row["username"];
		$level=$row["level"];
      
      if ($level==1) {

       header("location: dashboard.php");

      }else{

      	header("location: add_farmer.php");

      	exit;

      }

  }
*/
}

}


?>