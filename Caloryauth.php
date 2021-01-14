<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>

 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body>

<?php
/*
   class Auth {
$db= MysqliDb::getInstance();
$db->where("username", $username);
$db->orWhere("email",$email);
$row = $db->getOne("users");

if($row !== null)
{
    if($row != null)
    {
        if(strcasecmp($username, $row["username"]) === 0)
        $err_message = "This username is already taken";
    }
    $err_message="This username or email is already taken";
    return false;
}
*/
   

session_start();
    if( isset($_POST['weight'])&& isset($_POST['height'])&& isset($_POST['gender'])&& isset($_POST['paFactor'])&& isset($_POST['decision']))
    {
    $everythingisokay=true;
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $sex = $_POST['gender'];
    $paFactor = $_POST['paFactor'];
    $decision = $_POST['decision'];
    $age = $_POST['age'];

   
if($sex = "m")
{
    $Kcal=1;
#$Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age + 5)* $paFactor + $decision;
}
else if ($sex= "f")
{
$Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age -161)* $paFactor + $decision;
}
else if ($sex="o")
{
    $Kcal = (9.99 * $weight +6.25* $height - 4.92 * $age -161)* $paFactor + $decision;
}



    if($everythingisokay==true)
    {
        $con= new mysqli("localhost","root",null,"gymprogresionapp");

        if($con->query("INSERT INTO `calorycalc` (`weight`,`height`,`PhysicalActiv`,`gender` ,`Decision`,`Age`,`KcalShouldUserEat`,) VALUES ('$weight','$height','$paFactor','$sex','$decision','$age','$Kcal','$gender)"))
        {
            
           header('Location: PageAfterLogin.php');
      
    
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