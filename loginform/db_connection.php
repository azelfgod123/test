<?php
$sname="localhost";
$unmae="root";
$password = "";

$db_name = "login_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
session_start();
if (isset($_POST['uname']) && isset($_POST['psw'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['psw']);

	if (empty($uname)) {
		header("Location: login.php?error= User Name is required");
		exit();
	}else if(empty($pass)){
		header("Location: login.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['id'] = $row['id'];
				header("Location:authen.php");
				exit();
			}else
			{
				header("Location: login.php?error=Incorrect Username or Password");
				exit();
			}
			
			}else{
			header("Location: login.php?error=Incorrect Username or Password");
			exit();
		}
	}

}else{
	header("Location: login.php");
	exit();
}
 ?>