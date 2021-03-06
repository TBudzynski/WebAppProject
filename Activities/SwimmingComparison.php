<?php
  include_once '../Includes/dbh-inc.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
   
    <title>SportProgressApp</title>
   
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>

<nav>
        <div class="container">
            <a class="nav-logo"  href="../newMainPage.php" >SportProgressApp</a>
                <div class = "nav-links">
                    <a href="../aboutus.php">About us</a>
                    <a href="../logout_auth"> Log out</a>
                </div>
        </div> 
</nav>

<section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
                <div class="landing-page-text">
    Formula with number of swam pools and length of swimming pool. Use if you know what is the length of your pool
    and how many pools you swam.
    <form action="../DataScripts/SwimmingDistAndLengthComparison.php" method="POST"><br>
        Number of swam pools:<input type="text" name="swam-pools" maxlength="64" required=”required”><br>
        Length of swimming pool[m]:<input type="text" name="pool-length" maxlength="64" required="required">
  </br>   Swimming time[min]:<input type="text" name="swimming-time" maxlength="64" required="required">
        <input type="submit" value="Submit">
    </form><br><br>
    Formula with overall distance swam. Use if you only know overall distance you swam.
    <form action="../DataScripts/SwimmingDistComparison.php" method="POST"><br>
        Distance swam [m]:<input type="text" name="dist-swam" maxlength="64" required=”required”><br>
        Swimming time [minutes]:<input type="text" name="swimming-time" maxlength="64" required="required">
    <input type="submit" value="Submit">
    </form><br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" AND isset($_GET['feedback'])){
            echo $_GET['feedback'];
        }
    ?>
                </div>
            </div>
        </div>
        
    </section>
</body>
</html>