<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: editor.php");
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>All Things Treatment Editor </title>

    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
    
    <?php include 'include/head.php';  ?>
  </head>

  <body>
     <div class="">
        <?php include 'include/header.php';  ?>
     </div> 
     <div id="main" class="wrapper">
        <div id="login" >
          <form action="" method="post" class="form-signin">       
              <h2 class="form-signin-heading">Please login</h2>
              <input type="text" class="form-control" id="name" name="username" placeholder="Username" required="" autofocus="" />
              <input type="password" class="form-control" id="password" name="password" placeholder="**********"  required=""/>      
              <label class="checkbox">
              <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
              </label>
              <!--button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button--> 
              <input name="submit" type="submit" value=" Login ">  
              <br/><span><?php echo $error; ?></span>
          </form>
        </div> 
    </div>
         
  </body>
</html>
