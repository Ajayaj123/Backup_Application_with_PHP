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
        <h2>User 𝐋𝐨𝐠𝐢𝐧</h2>
        <form action="login.php" method="post">

          <div class="user-box">
            <input type="text" name="email" required="">
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
            <input type="submit" value="Login" name="btn" class="">
          </a>
          
            <h6> <a href="./registerlogin.php">create an account</a</h6>
        
        </form>
      </div>
</body>
</html>
<?php





//user login
if(isset($_POST['btn']))
{
   user_login($_POST['email'],$_POST['pass']);
}
function user_login($e,$p)
{
  
   include 'database.php';
   $select=mysqli_query($connect,"select * from login where email='$e' and password='$p'");
   $num=mysqli_num_rows($select);
   if($num==1)
   {

     echo '<script>window.location.href="userlogin.html";alert("successfully login");</script>';

    }
   else
   {
      echo 'not login';
   }
}


?> 