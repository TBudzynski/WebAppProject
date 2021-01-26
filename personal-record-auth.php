
<?php
session_start();
?>

<?php
require_once "lib/MysqliDb.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");
$Discipline=$_POST['Discipline'];


if(isset($_SESSION['username']) )
{
$username=$_SESSION['username'];

if(isset($_POST['Discipline'] ) && $Discipline="Cycling")
{ 
   
    $logcon=("SELECT MAX(cycling_distance_comp),cycling_time_comp,cycling_date_comp FROM cycling_comp WHERE username = '$username' ");
  $wynik = $con->query($logcon);
  $ile_znalezionych = $wynik->num_rows;

                $wiersz = $wynik->fetch_assoc();
 
echo '</table>';

}
if(isset($_POST['Discipline'] ) && $Discipline="Swimming")
{ 
    $logcon=("SELECT MAX(swim_distance_comp),swim_time_comp,swim_date_comp,MAX(swim_avg_speed_comp) FROM swimming_comp WHERE username = '$username' ");
  $wynik = $con->query($logcon);
  $ile_znalezionych = $wynik->num_rows;
 
                $wiersz = $wynik->fetch_assoc();

echo '</table>';
}
if(isset($_POST['Discipline'] ) && $Discipline="Jogging"){
$logcon=("SELECT MAX(jogging_distance_comp),jogging_time_comp,jogging_date_comp,jogging_avg_speed_comp FROM jogging_comp WHERE username = '$username' ");
$wynik = $con->query($logcon);
$ile_znalezionych = $wynik->num_rows;


              $wiersz = $wynik->fetch_assoc();



echo '</table>';


}
// if(isset($_POST['Discipline'] ) && $Discipline="Gym"){

//     $logcon=("SELECT exerc_name_comp, MAX(exerc_load_comp),exerc_date_comp FROM gym_comp WHERE username = '$username' && ( exerc_name_comp == 'Squat' || exerc_name_comp == 'Barbell Bench Press' || exerc_name_comp == 'Deadlift'   )");
//     $wynik = $con->query($logcon);
//     $ile_znalezionych = $wynik->num_rows;
    
//                   $wiersz = $wynik->fetch_assoc();
             
//     echo '</table>';

// }
// }
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
       


                <div class="Discipline-text">

                <h3> Distance: <?php
             
                    if($Discipline=="Cycling")
                    {
                    echo '<td>' .$wiersz['MAX(cycling_distance_comp)']. "km ". '</td>';
                    echo '</tr>';
                    }
                    else if($Discipline=="Swimming")
                    {
                        echo '<td>' .$wiersz['MAX(swim_distance_comp)']. "m ". '</td>';
                    echo '</tr>';
                    }
                    else if($Discipline=="Jogging")
                    {
                        echo '<td>' .$wiersz['MAX(jogging_distance_comp)']. "m ". '</td>';
                    echo '</tr>';
                    }
               
                    ?>
                </h3>  
                <h3>Training time: <?php
                if($Discipline=="Cycling")
                {
                    echo '<td>' .$wiersz['cycling_time_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Swimming")
                { echo '<td>' .$wiersz['swim_time_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Jogging")
                { echo '<td>' .$wiersz['jogging_time_comp']. '</td>';
                    echo '</tr>';
                }
                    ?>
                </h3>  
                <h3>Training date: <?php
                  if($Discipline=="Cycling")
                  {
                    echo '<td>' .$wiersz['cycling_date_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Swimming"){
                echo '<td>' .$wiersz['swim_date_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Jogging"){
                    echo '<td>' .$wiersz['jogging_date_comp']. '</td>';
                        echo '</tr>';
                    }
                    ?>
               
                <h4>  Average speed  <?php
                  if($Discipline=="Cycling")
                  {
                    echo '<td>' .$wiersz['cycling_avg_speed_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Swimming"){
                echo '<td>' .$wiersz['swim_avg_speed_comp']. '</td>';
                    echo '</tr>';
                }
                else if($Discipline=="Jogging"){
                    echo '<td>' .$wiersz['jogging_avg_speed_comp']. '</td>';
                        echo '</tr>';
                    }
                    ?>
                </h4>
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
















