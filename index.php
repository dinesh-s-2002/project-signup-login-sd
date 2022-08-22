<?php
  session_start();
  if (isset($_SESSION['id'])) {
      header("Location:profile.php");
  }
?>
<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>body{
  background-image:url('login.svg');
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
  }
  </style>
</head>
<body>
<div class="container" style="margin-top:50px">
<h1 style="text-align: center;">LOGIN</h1><br>
  <div class="row">
     <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top:20px">

        <!-- alert success and danger message--->
        <div class="alert alert-danger alert-dismissible show-message" role="alert" style="display: none;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span class="ajax-message"></span>
        </div>
        
        <form id="loginForm">
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" required="">
          </div>
          <p>Are you new user? <a href="signup.php">Sign Up</a></p>
          <button type="submit" class="btn btn-info btn btn-block" name="btnSubmit" onclick="location.replace('profile.php')">Login</button>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#loginForm").on("submit", function(e){
          e.preventDefault();

          var email = $("#email").val();
          var password = $("#password").val();

          $.ajax({
              url : "login.php",
              type:"POST",
              cache:false,
              data:{email:email,password:password},
              success:function(response){
                if(response == '1') {
                  window.location.replace("profile.php");
                }else if(response=='0'){
                  $(".show-message").show();
                  $(".ajax-message").text('Email or Password is Invalid');
                }
              }
          });
        });
    });
  </script>
</body>
</html>

