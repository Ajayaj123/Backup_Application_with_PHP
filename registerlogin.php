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
        <h2>Create An 𝐋𝐨𝐠𝐢𝐧</h2>
        <form action="registerlogin.php" method="post">

            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Username</label>
              </div>
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
          
            <h6> <a href="./login.html">already login</a</h6>
        
        </form>
      </div>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
   display($_POST['user'],$_POST['email'],$_POST['pass']);
}
function display($u,$e,$p)
{
   include 'database.php';
   $insert=mysqli_query($connect,"insert into login value('$u','$e','$p')");
   if($insert)
   {
      echo '<script> window.location.href="login.php";
      alert("successfully register");
      </script>';
   }
   else
   {
      echo 'not login';
   }
}






?> 