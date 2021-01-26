<?php
session_start();
?>

<?php
require_once "lib/MysqliDb.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");



if(isset($_SESSION['username']) && isset($_POST['TrainingDate']) )
{
$username=$_SESSION['username'];
$TrainingDate=$_POST['TrainingDate'];
}

    $logcon=("SELECT Discipline,DateTrainingPlanning 
    FROM planingactivity 
    WHERE username = '$username' and DateTrainingPlanning >'$TrainingDate' ");
    
    $result= $con->query($logcon);              

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
            <a class="nav-logo"  href="newMainPage.php" >SportProgressApp</a>
                <div class = "nav-links">
                <a href ="PlaningActivity.php">Planning activity</a>
                <a href="logout_auth.php">Sign out</a>
                <a href="newMainPage.php">Home</a>
                </div>
        </div> 
    </nav>
    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
       
                <div>
               
               
              </br>   Discipline: Training Date <br>
                </br> <br>   
 <?php 
                    if (!empty($result) &&$result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {   
                       
                    echo  $row["Discipline"]. " ", $row["DateTrainingPlanning"].  " | " ;}}
?> 
                   
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
                <a href="mailto:kontakt@nazwafirmy.xyz">Napisz do nas maila</a>
            </div>
    </div> 
</footer>
</body>
</html>



















