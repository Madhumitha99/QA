<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php
session_start();

if (isset($_POST['login'])) 
{

  $email  = $_POST['email_id'];

  $password = $_POST['pass'];

  mysqli_real_escape_string($conn, $email);
 
 mysqli_real_escape_string($conn, $password);

$query = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0)
 {
 
 while ($row = mysqli_fetch_array($result)) 
{

    $id = $row['id'];
     $email_id = $row['email'];
    $pass = $row['password'];
    $username = $row['username'];
 
   if (password_verify($password, $pass )) {
  
    $_SESSION['id'] = $id;
      $_SESSION['email']  = $email;
       $_SESSION['username'] = $username;
     header('location: dashboard/index.php');
 
   }
   
 else
 {
      
echo "<script>alert('invalid username/password');
  
    window.location.href= 'login.php';</script>";

 
   }
  }
}
else {
     
 echo "<script>alert('invalid username/password');
 
     window.location.href= 'login.php';</script>";

  
  }
}
?>



  <div class="login-card">
 
  <center>
          <p style="font-size: 25px"><b>LOG-IN
          </b></p>
        </center>
   <br>
  
<form method="POST">
   
 <input type="text" name="email_id" placeholder="Email" required="">
 
 <input type="password" name="pass" placeholder="Password" required="">
 
 <input type="submit" name="login" class="login login-submit" value="login">
  </form>

    
  <div class="login-help">
 
   • <a href="signup.php">Register</a> •
  </div>

</div>

 
 <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

 
 
</body>

</html>
