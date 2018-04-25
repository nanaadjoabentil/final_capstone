<!DOCTYPE html>
<html lang="en">
<header>
  <img src="../../images/1.png" alt="pic" width="1235px" height="300px">
</header>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../css/register.css"  media="screen,projection"/>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

<body>

<p id = "heading"> View Inventory Withdrawals</p>
<br>

  <form method="post" action="#" id="form">
    <?php require_once('processadmin.php');?>

      <div class="form-group">
        <label for="item_name">Search by Item Name:</label>
        <input type="text" class="form-control" id="searchitem" name="searchitem">
      </div>

    <button type="submit" class="btn btn-primary" id="butns" name="searchWithdrawals">Search</button>
    <a href="tindex.php"><input type="button" class="btn btn-primary" id="butns" value="Back"></a>
  </form>
  <br>

  <?php
  require_once('processadmin.php');
  if (isset($_POST['searchWithdrawals']))
  {
    searchWithdrawals();
  }
  else
  {
    viewWithdrawals();
  }
  ?>
  <footer>
    &copy2018  Nana Adjoa Bentil
  </footer>
</body>
</html>
