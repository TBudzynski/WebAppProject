<?php
session_start();
$username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <nav>
       <div class="container">
            <a class="nav-logo"  href="#" > SportProgressApp</a>
            <p style="color:white"> Hello <?php echo "$username". "!"; ?> </p>
            <div class = "nav-links">
           
                <a href="aboutus.php">About us</a>
                <a href="logout_auth.php">Sign out</a>

            </div> 

    </nav>
    <section class ="landing-page">
        <div class="landing-page-mainpage-options">
            <ul>
                
                <li><a href="HistoryofTraining.php" > History of training </a>
                <!-- <ol>
                    <li><a href="#" > Cycling </a></li>
                    <li><a href="#" > Walking </a></li>
                    <li><a href="#" > Running </a></li>
                    <li><a href="#" > Gym</a></li>
                    <li><a href="#" > Swimming </a></li>
                   
                </ol> -->
                
                
                </li><li><a href="PersonalRecord.php" >Personal records</a>
                    <!-- <ol>
                        <li><a href="#" > Cycling </a></li>
                        <li><a href="#" > Walking </a></li>
                        <li><a href="#" > Running </a></li>
                        <li><a href="#" > Gym</a></li>
                        <li><a href="#" > Swimming </a></li>
                       
                    </ol> -->
                </li><li><a href="PlaningActivityMenu.php" >Activity planning</a>
               <!-- <ol>
                <li><a href="#" > Cycling </a></li>
                <li><a href="#" > Walking </a></li>
                <li><a href="#" > Running </a></li>
                <li><a href="#" > Gym</a></li>
                <li><a href="#" > Swimming </a></li>
               </ol> -->
           <li><a href="caloryCalc.php" >Calory Calculator</a>  </li>
                </li><li><a href="#" >Settings</a>
                <!-- <ol>
                    <li><a href="#" > Change password </a></li>
                    <li><a href="#" > Delete account </a></li> 
                </ol> -->
                </li></ul>
            </div>
            </section>
        
        <footer>
            <div class="container">
                <div>  
                    <a href="#"> Regulamin </a>
                </div>
                <div class="footer-contact" id="kontakt">
                    <a href="tel:+47777888999">Zadzwoń teraz na naszą infolinię</a>
                    <a href="mailto:toomoo199@wp.pl">Napisz do nas maila</a>
                </div>
            </div>
         </div>
         
         </footer>
</body>
</html>