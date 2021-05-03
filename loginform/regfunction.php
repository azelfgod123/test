<?php
$server="localhost";
$aunmae="root";
$apassword = "";
$db_name = "login_db";

$conn = mysqli_connect($server, $aunmae, $apassword, $db_name);
		

		$uname=($_POST['uname']);
		$password=($_POST['psw']);
		$confirm=($_POST['rpsw']);
		$email=($_POST['eadd']);
		$error = 'error';
		$sql_u = "SELECT * FROM users WHERE user_name='$uname'";
  		$sql_e = "SELECT * FROM users WHERE email='$email'";
  		$res_u = mysqli_query($conn, $sql_u);
  		$res_e = mysqli_query($conn, $sql_e);

if(isset($_POST['submitbt'])){

	if (empty($uname)) {
		header("Location: registrationform.php?error= Username is required");
		exit();
	}else if(mysqli_num_rows($res_u) > 0){
		header("Location: registrationform.php?error= Username already exists");	

	}else if(mysqli_num_rows($res_e) > 0){
		header("Location: registrationform.php?error= Email Address already exists");		
		
	}else if(empty($password)){
		header("Location: registrationform.php?error= Password is required");
		exit();

	}else if(empty($confirm)){
		header("Location: registrationform.php?error= Retype-password is required");
		exit();
	}else if( strlen($password ) < 8 ) {
		header("Location: registrationform.php?error=Password is require to have atleast 8 characters");
	  	exit();
	}else if( !preg_match("#[0-9]+#", $password ) ) {
		header("Location: registrationform.php?error=Password is require to have atleast one number!");
		exit();
	}else if( !preg_match("#[a-z]+#", $password ) ) {
		header("Location: registrationform.php?error=Password is require to have atleast one letter!");
		exit();
	}else if( !preg_match("#[A-Z]+#", $password ) ) {
		header("Location: registrationform.php?error=Password is require to have atleast one capital letter!");
		exit();
	}else if( !preg_match("#\W+#", $password ) ) {
		header("Location: registrationform.php?error=Password is require to have atleast one symbol!");
		exit();

	}else if($_POST['psw'] !== $_POST['rpsw']) {
	header("Location: registrationform.php?error=Password and Confirm password should match!");
	exit();
	}else if(empty($email)){
		header("Location: registrationform.php?error=Email Address is required");
    	exit();
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      	header("Location: registrationform.php?error=Invalid email");
      	exit();
    }


	 else {		
	
		$query = "insert into users(user_name,password,email) values('$uname', '$confirm', '$email')";
		
		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

		if($run){
			echo "Registration successfully";
			header('location:login.php');
		}
		else{
			echo "Registration Failed";
		}
	}
}


	
?>
