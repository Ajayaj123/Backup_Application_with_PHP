<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sas.css">
</head>
<body>
    <div class="login-box">
        <h2>Admin 𝐋𝐨𝐠𝐢𝐧</h2>
        <form action="adminlogin.php" method="post">
            
          <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email Id</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Password</label>
          </div>
          <a >
            <span></span>
            <span></span>
            <span></span>
            <span></span>
    <input type="submit" value="Sign Up" name="btn" class="">
          </a>
          
            <!-- <h6> <a href="./login.html">already login</a</h6> -->
        
        </form>
      </div>
</body>
</html>
<?php



//admin
if(isset($_POST['btn']))
{
   user_login1($_POST['email'],$_POST['pass']);
}
function user_login1($e,$p)
{
  echo 'hi';
   include 'database.php';
   $select=mysqli_query($connect,"select * from admin where email='$e' and password='$p'");
   $num=mysqli_num_rows($select);
   if($num==1)
   {
     echo 'login';
     echo '<script>window.location.href="adminprofile.html";alert("successfully login");</script>';

    }
   else
   {
      echo 'not login';
   }
}
?> 