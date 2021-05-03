
  <!DOCTYPE html>
<html>
  <head>
   
    <title>LOGIN FORM</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
  </head>
  <style type="text/css">
    body{
  background: rgb(36,0,28);
    background: linear-gradient(90deg, rgba(36,0,28,1) 0%, rgba(121,11,9,1) 35%, rgba(255,0,44,1) 100%);
}

.container{
height: 100%;
align-content: center;

}

.card{
height: 380px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: white !important;
}



.input-group-prepend span{
width: 50px;
background-color: #e61324;
color: black;
border:0 !important;
color: white;
height: 37px;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;
}


.login_btnn{
color: black;
background-color: #ee0808;
width: 200px;
border: none;
height: 40px;
color: white;




}

.login_btnn:hover{
color: black;
background-color: red;
color: white;

}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
.fas{
  font-size: 15px;
}

  </style>


  <body>
         
 
       <!------------------------------------------------------------------------------------------------------------------->
<div class="container mt-5">
  <div class="d-flex justify-content-center h-100">
    <div class="card ">
      
      <div class="card-body shadow-sm ">
        <div class="font-weight-light mb-4"><p>SIGN IN</p></div>

         <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>

    
        <form action="db_connection.php" method="POST">


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text justify-content-center"><i class="fas fa-user "></i></span>
            </div>
            <input type="text" name="uname" class="form-control mb-4" placeholder="username"  required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="psw" class="form-control mb-5" placeholder="password"  required>
          </div>
        
          <div class="form-group">
            <div class="d-flex justify-content-center mt-3 login_container">
            <input type="submit" name = "submit" value="Log In" name="loginbt" class="btnn float-right login_btnn">
            </div>
          </div>

        </form>

      <!--------------------------------------------------------------------------------------------------------------------------->
        
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center  links text-dark"> Don't have an account?<a href="registrationform.php" target="regform">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="fpassword.php">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>


      <!------------------------------------------------------------------------------------------------------------------->

       



                 
 

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  
  </body>
</html>
