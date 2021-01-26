<?php

include_once '../Includes/dbh-inc.php';
session_start();
$username = $_SESSION['username'];

if (isset($_POST['exercise']) AND !empty($_POST['exercise'])){
    $SQLExerciseName = "INSERT INTO gym_names(exerc_name, username) VALUES('".$_POST['exercise']."', '$username');";
    $exerciseNameQuery = $con->query($SQLExerciseName);
}
header('Location: ../Activities/gym.php');

