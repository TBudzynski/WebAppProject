<?php

include_once '../Includes/dbh-inc.php';
session_start();
$username= $_SESSION['username'];
$feedback = "Error! Data not sent.";

if (isset($_POST['dist-swam']) AND isset($_POST['swimming-time']) AND $_POST['swimming-time'] != 0 AND is_numeric($_POST['dist-swam']) AND is_numeric($_POST['swimming-time'])){
    $swimmingAvgSpeed = $_POST['dist-swam']/$_POST['swimming-time'];

    $SQLSwimmingData = "INSERT INTO swimming_comp(username, swim_distance_comp, swim_time_comp, swim_avg_speed_comp, swim_date_comp) 
                        VALUES('".$username."', ".$_POST['dist-swam'].", ".$_POST['swimming-time'].", ".$swimmingAvgSpeed.", '".$_SESSION['date']."');";
    $swimmingDataQuery = $con->query($SQLSwimmingData);

    if ($swimmingDataQuery == false)
        $feedback = "Error! Data not sent.";
    else
        $feedback = "Data sent correctly!";
}

echo '<form action="../Activities/SwimmingComparison.php" id="feedbackForm" method="GET">
        <input type="text" name="feedback" style="display:none" value="'.$feedback.'">
        <input type="submit" style="display:none" id="feedbackSubmit">
      </form>
      <script>
        window.onload = function(){
        var button = document.getElementById("feedbackSubmit");
        button.form.submit();
        }
      </script>';
