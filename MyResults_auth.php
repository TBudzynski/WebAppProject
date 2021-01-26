
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

    if(isset($_POST['activity'] ) && $Discipline=="Jogging")
    {

    $logcon=("SELECT jogging_distance_comp,jogging_time_comp,jogging_avg_speed_comp,jogging_date_comp
    FROM jogging_comp
     WHERE username = '$username'and jogging_date_comp BETWEEN  '$StartDate' and  '$FinishDate'   "); 
           $result= $con->query($logcon);

    $logconn=("SELECT jogging_distance,jogging_time,jogging_avg_speed,jogging_date
               FROM jogging
               WHERE username = '$username'and jogging_date BETWEEN  '$StartDate' and  '$FinishDate'   "); 
                  $resultt= $con->query($logconn);
           
           
    }
    if(isset($_POST['activity'] ) && $Discipline=="Swimming")
    {
    $logcon=("SELECT swim_distance_comp,swim_time_comp,swim_avg_speed_comp,swim_date_comp
    FROM swimming_comp
     WHERE username = '$username'and swim_date_comp BETWEEN  '$StartDate' and  
           '$FinishDate'   "); 
           $result= $con->query($logcon);    
           $logconn=("SELECT swim_distance,swim_time,swim_avg_speed,swim_date
           FROM swimming
           WHERE username = '$username'and swim_date BETWEEN  '$StartDate' and  '$FinishDate'   "); 
              $resultt= $con->query($logconn);
       
                 
    }
    if(isset($_POST['activity'] ) && $Discipline=="Cycling")
    {
    $logcon=("SELECT cycling_distance_comp,cycling_time_comp,cycling_avg_speed_comp,cycling_date_comp
    FROM cycling_comp
     WHERE username = '$username'and cycling_date_comp BETWEEN  '$StartDate' and  '$FinishDate'   "); 
           $result= $con->query($logcon);
           $logconn=("SELECT cycling_distance,cycling_time,cycling_avg_speed,cycling_date
           FROM cycling
           WHERE username = '$username'and cycling_date BETWEEN  '$StartDate' and  '$FinishDate'   "); 
              $resultt= $con->query($logconn);           
    }
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
            <a class="nav-logo"  href="newMainPage.php" >SportProgressApp</a>
                <div class = "nav-links">
                <a href="newMainPage.php">Home</a>
                <a href="logout_auth.php">Sign out</a>
                </div>
        </div> 
    </nav>
    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
       <div>
                
               
               <br> History of Trainings </br>
              </br>Number of training: Date: Distance: Training Time: Avr speed<br>
                </br> <br>   
 <?php 
  $i=0;
 if($Discipline=="Jogging" )
 {
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {   
                       $i=$i+1;
                          echo " Training ". $i. " | " , $row["jogging_date_comp"]. "| " , $row["jogging_distance_comp"]. "[m]|" , $row["jogging_time_comp"]. "[min]|  ", $row["jogging_avg_speed_comp"]. "[m/min^2]|"  ;
                   
}  }}
else if ($Discipline=="Swimming" )
 {
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {   
                       
                        $i=$i+1;
                        echo " Training ". $i. " | ",  $row["swim_date_comp"]. "| " , $row["swim_distance_comp"]. "[m]|" , $row["swim_time_comp"]. "[min]|  ", $row["swim_avg_speed_comp"]. "[m/min^2]|  " ;}}
                    
} 
else if ($Discipline=="Cycling")
{
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {   
           
           $i=$i+1;

              echo " Training". $i.  " | " , $row["cycling_date_comp"]. "| " , $row["cycling_distance_comp"]. "[km]|" , $row["cycling_time_comp"]. "[km]|  ", $row["cycling_avg_speed_comp"]. "[km/min^2]|  " ;}}
}

?>
                
<br> <br><br> <br><br> <br>
               <br> 
             <br>Scheduled Trainings </br>
              </br> Number of training:Date: Distance: Training Time: Avr speed<br>
                </br> <br>
                <?php 
 if($Discipline=="Jogging" )
 {
     $i=0;
                    if ($resultt->num_rows > 0) {
                    while($row = $resultt->fetch_assoc()) {   
                    
                        $i=$i+1;

                        echo " Training ". $i.  " | " , $row["jogging_date"]. " | " , $row["jogging_distance"]. " [m]|" , $row["jogging_time"]. " [min]|  ", $row["jogging_avg_speed"]. "[m/min^2]|". "\r\n" ;}}
                    
}  
else if($Discipline=="Swimming" )
{
    $i=0;
                   if ($resultt->num_rows > 0) {
                   while($row = $resultt->fetch_assoc()) {   
                   
                       $i=$i+1;

                       echo " Training ". $i.  " | " , $row["swim_date"]. " | " , $row["swim_distance"]. " [m]|" , $row["swim_time"]. " [min]|  ", $row["swim_avg_speed"]. "[m/min^2]|". "\r\n" ;}}
                   
}
else if($Discipline=="Cycling" )
{
    $i=0;
                   if ($resultt->num_rows > 0) {
                   while($row = $resultt->fetch_assoc()) {   
                   
                       $i=$i+1;

                       echo " Training ". $i.  " | " , $row["cycling_date"]. " | " , $row["cycling_distance"]. " [km]|" , $row["cycling_time"]. " [min]|  ", $row["cycling_avg_speed"]. "[km/min^2]|". "\r\n" ;}}
                   
}
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