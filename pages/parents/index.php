<!DOCTYPE html>
<html lang="en">
<header>
  <img src="../../images/2.png" alt="pic" width="1235px" height="250px">
</header>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../css/register2.css"  media="screen,projection"/>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

<body>

  <br><br><br><br><br><br><br>

     <form method="post" class="form-signin" id="form">
       <?php require_once('processparent.php');?>

       <div class="wrapper">
           <h2 class="form-signin-heading">Login: Parents</h2><br>

           <input type="text" class="form-control" name="username" placeholder="Username" required/><br>
           <input type="password" class="form-control" name="password" placeholder="Password" required/><br>

           <button class="btn btn-lg btn-primary btn-block" type="submit" id="butns" name="parentlogin">Login</button>
            <br>
           <a href="parentRegister.php">Register</a> &nbsp&nbsp&nbsp&nbsp
           <a href="changepassword.php">Forgot Password? Change!</a><br><br>
           <a href="../index.php">Back to Homepage</a>
         </form>
       </div>
    </body>
  </html>

<?php

if(isset($_POST['parentlogin']))
{
  $username = $_POST['username'];
  viewAcademic();
}

?>
