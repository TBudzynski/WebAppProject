<?php

include_once '../Includes/dbh-inc.php';
session_start();
$username = $_SESSION['username'];
$feedback = "Error! Data not sent.";

if (isset($_POST['distance']) AND isset($_POST['time']) AND is_numeric($_POST['distance']) AND is_numeric($_POST['time']) AND $_POST['time'] != 0){
  $cyclingAvgSpeed = 60 * $_POST['distance']/$_POST['time'];
  $SQLCyclingData = "INSERT INTO cycling_comp(username, cycling_distance_comp, cycling_time_comp, cycling_avg_speed_comp, cycling_date_comp) 
                    VALUES('$username', ".$_POST['distance'].", ".$_POST['time'].", ".$cyclingAvgSpeed.", '".$_SESSION['date']."');";
  $cyclingDataQuery = $con->query($SQLCyclingData);
  if ($cyclingDataQuery == false)
    $feedback = "Error! Data not sent.";
  else
    $feedback = "Data sent correctly!";
}

echo '<form action="../Activities/CyclingComparison.php" id="feedbackForm" method="GET">
        <input type="text" name="feedback" style="display:none" value="'.$feedback.'">
        <input type="submit" style="display:none" id="feedbackSubmit">
      </form>
      <script>
        window.onload = function(){
        var button = document.getElementById("feedbackSubmit");
        button.form.submit();
        }
      </script>';


