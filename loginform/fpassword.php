
  <!DOCTYPE html>
  <?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$conn3 = mysqli_connect($dbhost ,$dbuser,$dbpass,$dbname);

if(isset($_POST['Submitbtn']))
{ 
        $myemail = $_POST['myemail'];
        $query_email= "SELECT * FROM users WHERE email='$myemail'";
        $exist_em = mysqli_query($conn3, $query_email);
        $resultmails = mysqli_query($conn3, $query_email);

        if (empty($myemail)){
            header("Location: fpassword.php?error=Please enter your verified email");
                exit();

        }else if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) {
           header("Location: fpassword.php?error= You enter Invalid email");
            exit();

            }else if(mysqli_num_rows($exist_em) < 1 ){
          header("Location: fpassword.php?error= The Email Address Doesn't exists");    
          exit(); 

        }else if(mysqli_num_rows($resultmails) === 1) {

          $row3 = mysqli_fetch_assoc($resultmails);
           $_SESSION['email'] = $row3['email'];
          if($row3['email'] === $myemail){

              header("Location: newpassword.php");
                     
                
                }
          }
        }

    ?>
<html>
  <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <title>Forgot Password</title>
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

  </style>
  <body>
     

<center>    <div class="container mt-5">
     <div class="card" style="width: 20rem;">
      <div class="card-body">
          <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <form action="" method="post">
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="myemail" placeholder="name@.com">
              <center>   <br><br>
              <input type="submit" class="button" value="Submit" name="Submitbtn"> </center>
          </div>


       </form>
      </div>
    </div>
</center>






  




   

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  
  </body>
</html>
