<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login Form </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <style type="text/css">
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgb(239,243,251);
  padding: 10px;
}
.container{
  position: relative;
  max-width: 400px;
  min-height: 550px;
  width: 50%;
  background: #fff;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 270px;
}
.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
}
.forms .form-content .input-boxes{
  margin-top: 25px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.forms .form-content .button input{
  color: #fff;
  background: #7d2ae8;
  border-radius: 6px;
  font-weight: 500;
  margin-top: 30px;
}
.form-content .input-box i{
  position: absolute;
  color: #7d2ae8;
  font-size: 17px;
}
.form-content .input-box input:focus{
  border-color: #7d2ae8;
}
.forms .form-content .sign-up-text{
  text-align: center;
  margin-top: 50px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
  margin-bottom: 20px;
  margin-top:30px; 
}
.nextbutton {
	margin-bottom: 550px;
}

.nextbutton a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.nextbutton a:hover {
  background-color: #ddd;
  color: black;
}

.next {
  background-color: #f1f1f1;
  color: black;
}

.round {
  border-radius: 50%;
}

</style>
   </head>
<body>  
  <div class="nextbutton">
	<a href="registration.php" class="next round">&#8250;</a>
</div>
  <div class="container">
    <center>
      <div class="left-area"><img src="../techdex/images/logo2.png"></div></center>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title" style="font-size: 30px;">Login</div>
          <form action="authentication.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="Email" name="Email" placeholder="Enter your email" id="Email" required="required">
                </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="Password" name="Password" id="Password" placeholder="Enter your password" required="required">
              </div>
              <!-- <div class="text"><a href="#">Forgot password?</a></div> -->
              <div class="button input-box">
                <input type="Submit" name="Submit" value="Login" onclick="alert">
              </div>
              <div class="text sign-up-text" ><label>Don't have an account?<a href="registration.php">Sigup now</a></label>
              </div>
              </div>
        </form>
      </div>
   
    </div>
  </div>
</body>
</html>

<?php
 include"authentication.php";
 
?>