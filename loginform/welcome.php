<?php 
session_start();
  
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
</head>
<body>
    
    <div class="page-header">
        <h1><b>Welcome.</h1>
    </div>
    <p>
       
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
    
</body>
</html>