<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>
 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body>

<?php

   
$con= new mysqli("localhost","root",null,"gymprogresionapp");
session_start();



    if(isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['paFactor']) && isset($_POST['decision']))
    {
        //&& isset($_POST['gender'])
    $everythingisokay=true;
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $paFactor = $_POST['paFactor'];
    $decision = $_POST['decision'];
    $age = $_POST['age'];
    $username=$_SESSION['username'];

 //   "SELECT `gender` FROM `usersdata` WHERE username='$username'".$gender;
  
 $gendersearch="SELECT gender FROM usersdata WHERE username='$username'"; 
 $result=mysqli_query($con,$gendersearch);
 $row=mysqli_fetch_assoc($result);
 //$sex = $con->query($gendersearch) or die("Problemy z odczytem danych!"); 
 //$wiersz = $sex->fetch_assoc();
$gender= $row['gender'];
 
  
if($gender == " m ")
{

$Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age + 5)* $paFactor + $decision;
}
else if ($gender == " k ")
{
$Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age -161)* $paFactor + $decision;
}
else if ($gender == " o ")
{
    $Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age -161)* $paFactor + $decision;
}

$loguser="SELECT  * FROM  calorycalc WHERE username = '$username' ";
$result = mysqli_query($con, $loguser) or die("Problemy z odczytem danych!");
$ile = mysqli_num_rows($result);
//$rezultat=@$con->query($logcon)

if($ile==0){

        if($con->query("INSERT INTO `calorycalc` (`weight`,`height`,`PhysicalActiv`,`gender`,`Decision`,`Age`,`KcalShouldUserEat`,`username`) VALUES ('$weight','$height','$paFactor','$gender','$decision','$age','$Kcal','$username')"))
        {
            
           header('Location: newMainPage.php');

        }
        else
        {
            echo "error: " .$con->error;
        }
    }

        else if('Ilosc_uzytkownikow'>0)
        {
            if($con->query("UPDATE `calorycalc` 
                            SET `weight` = '$weight' ,`height` = '$height',`PhysicalActiv`='$paFactor',`gender`='$gender',`Decision`='$decision',`Age`='$age',`KcalShouldUserEat`='$Kcal'
                            WHERE `username`='$username' "))
            {
                header('Location: newMainPage.php');
            }
            else
                {
                    echo "error: " .$con->error;
                }
            }
        }
    
  mysqli_close($con) ; 
?>

 </body> 
 </html>