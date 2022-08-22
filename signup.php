<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SIGNIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>body{
  background-image:url('registration.svg');
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
  }
  </style>
</head>
<body>
<div class="container" style="margin-top:50px">
<h1 style="text-align:center;">SIGNIN</h1><br>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4">

        <!-- alert success and danger message--->
        <span class="message-message"></span>
        
        <form id="signupForm">
          <div class="form-group">
             <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" name="username" placeholder="Username" required="">
          </div>
          <div class="form-group">
             <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Password" required="">
          </div>
          <p>If you have account <a href="index.php">Login</a></p>
          <button type="submit" class="btn btn-info btn btn-block" name="btnSubmit" onclick="location.replace('index.php')">SIGNUP</button>  
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#signupForm").on("submit",function(e){
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
              url : "register.php",
              type: "POST",
              cache:false,
              data: formData,
              success:function(response){
                data = JSON.parse(response);
                if (data.error == "0") {
                  $("#signupForm").trigger("reset");
                  $('.message-message').replaceWith('<div class="alert alert-success alert-dismissible" role="alert">'
                  + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }else if(data.error == "1") {
                $('.message-message').replaceWith('<div class="alert alert-danger alert-dismissible" role="alert">'
                  + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }
              }
          });
        });
    });
  </script>
</body>
</html>

