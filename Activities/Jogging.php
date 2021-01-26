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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SportProgressApp</title>
   
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
                   
    <form action="../DataScripts/JoggingDataSender.php" method="POST"><br>
    <div class="logoptions">
        Distance [m]:</br></br><input type="text" name="distance" maxlength="64" required=”required”><br>
        Time [min]:</br></br><input type="text" name="time" maxlength="64" required="required"><br>
        <input type="submit" value="Submit">
        </div>
    </form><br><br>
                    
                </div>
            </div>
        </div>
</section>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" AND isset($_GET['feedback'])){
            echo $_GET['feedback'];
        }
    ?>
    <footer>
    <div class="container">
        <div>         
        <a href="#"> Regulamin </a>
        </div>
            <div class="footer-contact" id="kontakt">
                <a href="tel:+47777888999">Zadzwoń teraz na naszą infolinię</a>
                <a href="mailto:kontakt@nazwafirmy.xyz">Napisz do nas maila</a>
            </div>
    </div> 
</footer>
</body>
</html>