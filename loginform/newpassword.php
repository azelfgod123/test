
  <?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{ 

  $npass = $_POST['newpass'];
  $cpass = $_POST['confirmpass'];


  
  if(empty( $npass)){
      header("Location: newpassword.php?error= New password is required");
      exit();

    }else if(empty($cpass)){
      header("Location: newpassword.php?error=Confirming password is required");
      exit();

    } else if(!empty($npass) && !empty($cpass))
      {
        if( strlen($npass ) < 8 ) {
          header("Location: newpassword.php?error=Password must be atleast 8 characters");
            exit();
        }else if( !preg_match("#[0-9]+#",  $npass ) ) {
          header("Location: newpassword.php?error=Password must include at least one number!");
          exit();
        }else if( !preg_match("#[a-z]+#",  $npass) ) {
          header("Location: newpassword.php?error=Password must include at least one small letter!");
          exit();
        }else if( !preg_match("#[A-Z]+#",  $npass ) ) {
          header("Location: newpassword.php?error=Password must include at least one capital letter!");
          exit();
        }else if( !preg_match("#\W+#", $npass )) {
          header("Location: newpassword.php?error=Password must include at least one symbol!");
          exit();

        }else if($_POST['newpass'] !== $_POST['confirmpass']) {
        header("Location: newpassword.php?error=Password and Confirm password should match!");
          exit();
          
        }else{

         $em=$_SESSION['email'];

          // echo $em;
          $query_pass="UPDATE users set password='$cpass' where email='$em'";

        $run2 = mysqli_query($connect,$query_pass) or die(mysqli_error($connect));



        if ($run2){
          header("Location: login.php");
        }
        }
      }
   }



?>
<!DOCTYPE html>
<html>
  <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <title>Change Password</title>
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




  </style>
  <body>
        <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>



    <center>    <div class="container mt-5">
     <div class="card" style="width: 20rem;">
       <h5 class="card-title mt-5">New Password</h5>
      <div class="card-body">
          <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <form action="" method="post">
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="newpass" class="form-control mb-5" placeholder="New Password"  required>
          </div>
            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="confirmpass" class="form-control mb-5" placeholder="Confirm Password"  required>
          </div>
          <input type="submit" class="button" value="Submit" name="subchange"> 
       </form>
      </div>
    </div>
</center>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  
  </body>
</html>
