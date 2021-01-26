
<?php
session_start();
    
    
    $con=new mysqli("localhost","root",null,"gymprogresionapp");

    if(isset($_SESSION['username']) )
    {
    $username=$_SESSION['username'];
    
    }
    if(isset($_POST['activity'] )&& isset($_POST['startingDate'])&& isset($_POST['finishDate']))
    {
    $everythingisokay=true;
    $Discipline = $_POST['activity'];
    $StartDate = $_POST['startingDate'];
    $FinishDate= $_POST['finishDate'];

  
    $logcon=("SELECT sa.Discipline,sa.TrainingTime,sa.Distance,sa.DateTraining 
    FROM sportactivity as sa,usersdata as ud
     WHERE sa.username = '$username'and DateTraining BETWEEN  '$StartDate' and  
           '$FinishDate' and Discipline = '$Discipline'  and sa.username=ud.username"); 
           $result= $con->query($logcon);              

  /*
  $wynik = $con->query($logcon);
    $ile_znalezionych = $wynik->num_rows;
    $wiersz = $wynik->fetch_assoc();

}
   */
}
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
            <a class="nav-logo"  href="index.php" >SportProgressApp</a>
                <div class = "nav-links">
                <a href="newMainPage.php">Home</a>
                <a href="logout_auth.php">Sign out</a>
                </div>
        </div> 
    </nav>
    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
       
                <div class="HistoryofDiscipline-text">
               
               
              </br>   Distance: Training Date : Training Time<br>
                </br> <br>   
 <?php 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {   
                       
                          echo  $row["Distance"]. "km ", $row["DateTraining"]. " " , $row["TrainingTime"]. "  " ;}}
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