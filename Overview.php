<?php 
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FinTrac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container-2">
    <?php 
    require_once 'pageFormat.php';
    require_once 'dbFuncs.php';
    if(isset($_SESSION['user']))
    {
      $arr = array("Overview", "Income", "Expense", "Budget", "Remainder", "LogOut");
    }
    else
      $arr = array("Home", "Income", "Expense", "Budget", "Contact", "Login", "Sign Up");

    pageHeader("Home", "./images/img.jpg", $arr);
    ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>