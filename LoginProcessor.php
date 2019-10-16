<?php


include_once('connect.php');
		
if(isset(filter_input_array(INPUT_POST)['login']))
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

	$query = mysqli_query($conn, "select * from `users`where user_email='$email' && user_pwd='$pwd'");
	$rowcount = mysqli_num_rows($query);
    
	 if(empty($email) || empty($pwd)){
		 header("Location: login.php?login=emptye");
	 }
	 elseif($email=='admin' && $pwd=='123'){
		 
		// $_SESSION['email'] = $email;
		// $_SESSION['pwd'] = $pwd;
		
		header("Location: admin-dashboard.php");
	 }
	 else{
    	 if($rowcount==TRUE){
			 header("location:index.php?login=successfull");
		 } else {
			 echo 'error in login';
		 }
	 }

}



?>