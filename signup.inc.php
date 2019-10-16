<?php
if(isset(filter_input_array(INPUT_POST)['submitup'])){
    include_once 'connection.php';
    
/* @var $first type */
    // $first = mysqli_real_escape_string($con,filter_input_array(INPUT_POST)['first']);
    // $last = mysqli_real_escape_string($con,filter_input_array(INPUT_POST)['last']);
    // $email = mysqli_real_escape_string($con,filter_input_array(INPUT_POST)['email']);
    // $uid = mysqli_real_escape_string($con,filter_input_array(INPUT_POST)['uid']);
    // $pwd = mysqli_real_escape_string($con,filter_input_array(INPUT_POST)['pwd']);
    
	$first = $_POST['first']);
    $last = $_POST['last']);
    $email = $_POST['email']);
    $uid = $_POST['uid']);
    $pwd = $_POST['pwd']);
    
    if(empty($first) || empty($last) || empty($email) ||empty($uid) ||empty($pwd)){
        header("Location:signup.php?signup=empty");
		exit();
    }else{
        if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
           header("Location:signup.php?signup=invalid");
			exit();  
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               header("Location:signup.php?signup=invalidemail");
				exit(); 
            }else{
                $sql = "SELECT * FROM `users` WHERE user_id='$uid'";
                $result = mysqli_query($con, $sql);
                /* @var $result type */
               $resultCheck=mysqli_num_rows($result);
                
                if($resultCheck > 0){
                  header("Location: signup.php?signup=usertaken");
				  exit();   
                }else{
                    
                    $sql = "INSERT INTO users(user_first,user_last, user_email, user_uid, user_pwd) VALUES('$first','$last','$email','$uid','$pwd');";
                    $result = mysqli_query($con, $sql);
                    
                    header("Location:signup.php?signup=success");
					exit(); 
                }
            }
        }
    }
} 
else {
    header("Location: index.php");
    exit();
}
?>
