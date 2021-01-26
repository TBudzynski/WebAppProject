<?php   session_start();



 
$con=new mysqli("localhost","root",null,"gymprogresionapp");

if(isset($_SESSION['username']) )
{
$username=$_SESSION['username'];

}


$everythingisokay=true;



$logg=("SELECT KcalShouldUserEat,whey,carbohydrantes,Fat
FROM calorycalc  
 WHERE username = '$username'  "); 
       $result= $con->query($logg);              

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
            <a class="nav-logo"  href="newMainPage.php" > SportProgressApp</a>
            <div class = "nav-links">
                <a href="aboutus.php">About us</a>
            
                <a href="logout_auth.php">Sign out</a>
            </div>
       </div> 
    </nav>
    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
                <div class="landing-page-text">

                </br>   Calory|Whey|Carbo|Fat<br>
                </br> <br>   
 <?php 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {   
                       
                          echo  $row["KcalShouldUserEat"]. "| ", $row["whey"]. "g| " , $row["carbohydrantes"]."g |", $row["Fat"]."g  " ;
                        
                         
                        
                        }}
                       
                    ?> 
                    
                       <button class="g1"><a href="newMainPage.php" >Ok</a></button>   
                </div>
            </div>
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
    </footer>
</body>
</html>