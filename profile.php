<?php
  session_start();
  
?>

<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Student Profile Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>body{
  background-image:url('profile.svg');
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;
}
</style>
</head>
<body>
  <div class="container" style="margin-top:50px">
    <h1 style="text-align:center;">Student Profile Page</h1><br>
    <div class="row">
       <h5>Hello, <?php echo ucwords($_SESSION['fullname']); ?> <small><br><button><a href="index.php">Logout</a></button></small></h5>   
    </div>
  </div>
</body>
</html>