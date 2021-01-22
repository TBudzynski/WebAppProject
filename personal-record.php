
<?php
session_start();
?>

<?php
require_once "lib/MysqliDb.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");



if(isset($_SESSION['username']) )
{
$username=$_SESSION['username'];
//echo $_SESSION['username'];
}


if(isset($_POST['Discipline'] ))
{ //$surname = $_POST['surname'];
  //  echo "cos tu sie dzieje";
    $sport = $_POST['Discipline'];
    $_SESSION['discipline']=
    $logcon=("SELECT MAX(distance),Discipline,TrainingTime,DateTraining FROM sportactivity,usersdata WHERE sportactivity.username = '$username' and Discipline = '$sport' and sportactivity.username=usersdata.username");
  $wynik = $con->query($logcon);
  $ile_znalezionych = $wynik->num_rows;
 
//echo '<table>';
//echo '<tr><td>Discipline</td><td>Distance</td></tr>';

                $wiersz = $wynik->fetch_assoc();
           //    echo '<tr>';
            //   echo '<td>'.$wiersz['Discipline'].'</td>';
             //   echo '<td>'.$wiersz['MAX(distance)'].'</td>';
             //  echo '</tr>';
  
 

echo '</table>';

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
       
                <div class="Discipline-text">
              
                <h2>  Discipline: <?php  
                    echo '<tr>';
                    echo '<td>'.$wiersz['Discipline'].  '</td>';
                    ?> </h2> 
                <h3> Distance: <?php
             

                    echo '<td>' .$wiersz['MAX(distance)']. "km ". '</td>';
                    echo '</tr>';
                
               
                    ?>
                </h3>  
                <h3>Training time: <?php
                    echo '<td>' .$wiersz['TrainingTime']. '</td>';
                    echo '</tr>';
                    ?>
                </h3>  
                <h3>Training date: <?php
                    echo '<td>' .$wiersz['DateTraining']. '</td>';
                    echo '</tr>';
                    ?>
                </h3>  
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
















