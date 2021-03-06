<!DOCTYPE html>
<html lang="en">
<header>
  <img src="../../images/2.png" alt="pic" width="1235px" height="300px">
</header>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../css/register.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../../css/dashboard.css"  media="screen,projection"/>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
<body>

<p id = "heading"> Staff Subjects and Classes Information </p>
<br>

  <form method="post" id="form">
    <a href="teacherindex.php"><input type="button" class="btn btn-primary" id="butns" value="Back"></a>
    <button type="submit" class="btn btn-primary" id="butns" name="add">Add</button>
    <button type="submit" class="btn btn-primary" id="butns" name="search">Search</button>
    <!-- <button type="submit" class="btn btn-primary" id="butns" name="delete">Delete</button> -->
    <br><br><br>
    <?php
    require_once("processteacher.php");

    if (isset($_POST['add']))
    {
      header("location: addStaffSubjects.php");
    }
    else if (isset($_POST['search']))
    {
      header("location: viewStaffSubjects.php");
    }
    else if (isset($_POST['delete']))
    {
      header("location: deleteStaffSubjects.php");
    }
    else
    {
      viewAllStaffSubjects();
    }
    ?>
  </form>

  <footer>
    &copy2018  Nana Adjoa Bentil
  </footer>

  </body>
  </html>
