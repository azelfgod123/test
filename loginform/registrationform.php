<!doctype html>
<html>

 <head>
   
    <title>LOGIN FORM</title>
  </head>
  <body>
	
	


	<center> 
		   <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
		<div class="card" style="background: black; width: 400px; height: 500px;">

     <!-- Para sa Textbox ni Password <tr bgcolor=black>
		<body background="hpbg.jpg"   background-position: center;
           background-repeat: no-repeat;-->
		
        <form action="regfunction.php" method="post">
       <div class="form"> 
		<center>
			 <h1><font size = "50px" color="white" face="agency fb"> Registration Form</font></h1> 
		</center>
			<font size = "2" color="white" face="Segoe UI Semibold"> Direction: Please read carefully and follow the instuction</font> 
		

	<br>
	<br>
			<h2> <font size = "6px" color="white" face="agency fb">Contact Information</font> </h2>
				<font size = "2" color="white" face="Segoe UI Semibold">
			  <p style="display: initial; margin-right: 10px;" >Email:</p>
					<input type="email"placeholder="Email Address:" name="eadd" size="20" required>
				<br>
				</font>
      	
	<br>
			
	<br>
			<h2> <font size = "6px" color="white" face="agency fb">Personal Account</font> </h2>
				 <font size = "2" color="white" face="Segoe UI Semibold">
				<p style="display: initial; margin-right: 10px;" >Username:</p>
					<input type="text"placeholder="Enter Username" name="uname" required>
				<br>
				<p style="display: initial;  margin-right: 13px;">Password:</p>
					<input type="password"placeholder="Enter Password" name="psw" required>
	<br>
				<p style="display: initial;  margin-right: 10px;">Retype your password:</p>
					<input type="password"placeholder="Re-type your password" name="rpsw" required>
				</font>
	<br>
			
	<br>			
								<input type="Submit" class="button" value="Submit" name="submitbt"> 
						

			</div>
			</form>   	<div class="sty" style="margin-top: 10px; font-family: Arial; ">
			                    <a href="login.php" target="login" style="color: white;">Log In</a>
						</div>
					 </center>

		</div>

    </body>
</html>