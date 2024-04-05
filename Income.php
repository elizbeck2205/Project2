<?php
require_once 'pageFormat.php';
require_once 'IncomeDatabaseFunctions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FinTrac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleExpense.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

    <!-- My Scripts -->
    <script src="js/IncomeDatabaseFunctions.js"></script>

</head>
<body>
<div class="container-2">
    <?php 
    // Display page header
    $arr = array("Overview", "Income", "Expense", "Budget", "Remainder", "LogOut");
    pageHeader("Home", "./images/img.jpg", $arr);
    ?>
</div>

<form class="p-5" action="IncomeHandler.php" method="POST">
    <div class="form-group">
        <label for="amount">Income amount:</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="$">
    </div>
    <br>
    <div class="form-group">
        <label for="source">Income source:</label>
        <input type="text" class="form-control" id="source" name="source">
    </div>
    <br>
    <div class="form-group">
        <label for="frequency">Frequency:</label>
        <input type="text" class="form-control" id="frequency" name="frequency">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</body>
</html>