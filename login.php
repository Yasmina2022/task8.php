<?php
session_start();             // start session 
$fname="";
$email="";
$pw="";
$msg="";
//if($_SERVER["REQUEST_METHOD"]="POST"){
    if(isset($_POST["signup"])){
    $fname=$_POST["FULL_NAME"];
    $email=$_POST["email"];
    $pw=$_POST["pw"];
 }
 if(!empty($fname) && !empty($email) && !empty($pw)){
   // $_SESSION["FULL_NAME"]=$fname;        // set variables
   // $_SESSION["email"]=$email;
    //$_SESSION["password"]=$pw;
    //$msg="Welcome ". $_SESSION["FULL_NAME"]."<br>";
    $expired_date =time()+(86400*30);                      // 86400=1day
setcookie("FULL_NAME" ,$fname ,$expired_date ,"/");
$msg="Welcome from cookie ". $_COOKIE["FULL_NAME"]."<br>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>sign up form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="alert alert-success">
        <?= $msg ?>
        <a href= "./logout.php" class="btn btn-primary"> log out here </a>
</div>
  <h2>sign up here </h2>
   <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
  <div class="form-group">
      <label for="fname">FULL NAME :</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter your name" name="FULL_NAME">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pw">Password:</label>
      <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default"   value="signup"  name='signup'>Submit</button>
  </form>
</div>
</body>
</html>
