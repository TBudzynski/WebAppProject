<?php

include_once '../Includes/dbh-inc.php';
session_start();
$username = $_SESSION['username'];
$feedback = "Error! Data not sent.";

                   
if (isset($_POST['distance']) AND isset($_POST['time']) AND is_numeric($_POST['distance']) AND is_numeric($_POST['time']) AND $_POST['time'] != 0){
  $joggingAvgSpeed = $_POST['distance']/$_POST['time'];
  $SQLJoggingData = "INSERT INTO jogging(username, jogging_distance, jogging_time, jogging_avg_speed, jogging_date) 
                    VALUES('".$username."', ".$_POST['distance'].", ".$_POST['time'].", ".$joggingAvgSpeed.", '".$_SESSION['date']."');";
  $joggingDataQuery = $con->query($SQLJoggingData);

 
  if ($joggingDataQuery == false)
    $feedback = "Error! Data not sent.";
  else
    $feedback = "Data sent correctly!";
}

 echo '<form action="../Activities/Jogging.php" id="feedbackForm" method="GET">
         <input type="text" name="feedback" style="display:none" value="'.$feedback.'">
        <input type="submit" style="display:none" id="feedbackSubmit">
       </form>
       <script>
       window.onload = function(){
        var button = document.getElementById("feedbackSubmit");
        button.form.submit();
         }
       </script>';


