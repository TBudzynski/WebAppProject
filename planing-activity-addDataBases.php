<?php
session_start();

require_once "lib/MysqliDb.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");



if(isset($_SESSION['username']) )
{
$username=$_SESSION['username'];
//echo $_SESSION['username'];
}


if(isset($_POST['activity'] ))
{ 
    $discipline = $_POST['activity'];
    $TrainingDate=$_POST['TrainingDate'];
   
    $con->query("INSERT INTO `planingactivity` (`username`,`Discipline`,`DateTrainingPlanning`) VALUES ('$username','$discipline','$TrainingDate')");

    header('Location: newMainPage.php');


}

?>


















