<?php 
include "connection.php";
include "student/insert.php";
include "expert/insert2.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Registartion Form</title>
    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <meta charset="UTF-8">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  min-height: 111vh; 
  display: flex;
  align-items: center;
  justify-content: center;

  background-color: #5b13b9;
  padding: 200px;
  padding-top: 50px;
  padding-bottom: 50px;

}
.container{
  position: relative;
  max-width: 850px;
  width: 100%;
  background: #fff;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 2700px;
}
.backbutton {
	margin-bottom: 600px;
	margin-left: -10px;
}
.backbutton a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}
.backbutton a:hover {
  background-color: #ddd;
  color: black;
}
.previous {
  background-color: #f1f1f1;
  color: black;
}
.round {
  border-radius: 50%;
}
.container .cover{
  position: absolute;
  top: 0;
  left: 50%;
  height: 100%;
  width: 50%;
  z-index: 98;
  transition: all 1s ease;
  transform-origin: left;
  transform-style: preserve-3d;
}
.container #flip:checked ~ .cover{
  transform: rotateY(-180deg);
}
 .container .cover .front,
 .container .cover .back{
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.cover .back{
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.container .cover::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;

  background-color: #5b13b9;
  opacity: 0.5;
  z-index: 12;
}
.container .cover::after{
  opacity: 0.3;
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.container .cover img{
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: 10;
  backface-visibility: hidden;
}
.container .cover .back .backImg{
  transform: rotateX(180deg);
}

.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
}
.container .form-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form-content .signup-form,
.form-content .signup2-form{
  width: calc(100% / 2 - 25px);
}
.forms .form-content .title{
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .title:before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #7d2ae8;
}
.forms .signup-form  .title:before{
  width: 20px;
}
.forms .form-content .input-boxes{
  margin-top: 30px;
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
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #7d2ae8;
}
.form-content .input-box i{
  position: absolute;
  color: #7d2ae8;
  font-size: 17px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #fff;
  background: #7d2ae8;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
.forms .form-content .button input:hover{
  background: #5b13b9;
}
.forms .form-content label{
  color: #5b13b9;
  cursor: pointer;
}
.forms .form-content label:hover{
  text-decoration: underline;
}
.forms .form-content .signup-text,
.forms .form-content .sign-up-text{
  text-align: center;
  margin-top: 25px;
}
.container #flip{
  display: none;
}
@media (max-width: 730px) {
  .container .cover{
    display: none;
  }
  .form-content .signup-form,
  .form-content .signup2-form{
    width: 100%;
  }
  .form-content .signup-form{
    display: none;
  }
  .container #flip:checked ~ .forms .signup2-form{
    display: block;
  }
  .container #flip:checked ~ .forms .signup-form{
    display: none;
  }
}
.logo{
  width: 100px;
  height: 110px;
}
</style>
   </head>
<body>
	<div class="backbutton">
	<a href="login.php" class="previous round">&#8249;</a>
<!-- <a href="#" class="next round">&#8250;</a> -->
</div>
  <div class="container">
    <input type="checkbox" id="flip">
     <div class="cover">
      <div class="front">
        <img src="../techdex/images/bg3.jpg" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="../techdex/images/bg3.jpg" alt="">
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="signup-form">
            <div class="title">Student Signup</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required="required" name="Name">
              </div>
              <div class="input-box">
                      <i class="fas fa-envelope"></i>
                      <input type="email" placeholder="Enter your email" required="required" id="email" name="Email" pattern=".+@gmail\.com">
              </div>
              <div class="input-box">
                      <i class="fas fa-phone"></i>
                      <input type="tel" placeholder="Mobile number" required="required" name="MNumber">
                    </div>

              <div class="input-box">
                      <i class="fas fa-registered"></i>
                      <input type="" placeholder="Register number" required="required" name="RNumber">
              </div>

              <div class="input-box">
                      <i class="fas fa-lock"></i>
                      <input type="password" placeholder="Enter your password" required="required" pattern="(?=*\d)(?=*[a-z]).{8}" title="must be contain at least one number and one lowercase letter, and at least 8 or more character character" name="Password">
              </div>

              <div class="button input-box">
                      <input type="submit" value="Submit" id="" name="Student_Submit">
              </div>

              <div class="text sign-up-text">Are you expert? <label for="flip">Sigup now</label></div>

              <center><div class="logo" style="margin-right: 60px;"><img src="../techdex/images/logo2.png"></div></center>
            </div>
        </form>
      </div>
        <div class="signup2-form">
          <div class="title">Expert Signup</div>
        <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                      <i class="fas fa-user"></i>
                      <input type="text" placeholder="Enter your name" required="required" name="Name">
              </div>
              <div class="input-box">
                      <i class="fas fa-envelope"></i>
                      <input type="email" placeholder="Enter your email" required="required" id="email" name="Email" pattern=".+@gmail\.com">
              </div>
              <div class="input-box">
                      <i class="fas fa-phone"></i>
                      <input type="tel" placeholder="Mobile number" required="required" name="MNumber">
                    </div>
                    </div> 
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required="required" name="Password">
              </div>

              <div class="button input-box">
                <input type="submit" value="Submit" action="" id="" name="Expert_Submit">
              </div>
              <div class="text sign-up-text">Are you Student? <label for="flip">Signup now</label></div>
              <center><div class="logo" style="margin-right:40px;"><img src="../techdex/images/logo2.png"></div></center>
              </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
