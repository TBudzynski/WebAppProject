<?php

include_once '../Includes/dbh-inc.php';
session_start();

$username =  $_SESSION['username'];
$i = 0;
if (isset($_POST['set-name']) AND isset($_POST['set-series'])){
    if (isset($_POST['repetition-1']) AND isset($_POST['load-1'])){
        $i++;
        while ($i <= $_POST['set-series'] AND $_POST['repetition-'.$i.''] != null AND $_POST['load-'.$i.''] != null){
            if ($i <= $_POST['set-series'])
                $i++;
        }
    }
    
    if ($_POST['set-series'] == $i - 1)
        $correctDataReaded = true;
    else
        $correctDataReaded = false;
}
else
    $correctDataReaded = false;

$feedback;
if ($correctDataReaded == true){
    $feedback = "Data sent correctly!";
    if (is_numeric($_POST['set-series'])){
        for ($i = 1; $i <= $_POST['set-series']; $i++){
            $SQLGymData = "INSERT INTO gym(username, exerc_name, exerc_all_series, exerc_this_series, exerc_repetitions, exerc_load, exerc_date) 
                           VALUES('".$username."', '".$_POST['set-name']."', ".$_POST['set-series'].", ".$i.", ".$_POST['repetition-'.$i.''].", ".$_POST['load-'.$i.''].", '".$_SESSION['date']."');";
           echo $SQLGymData;
           $exerciseNameQuery = $con->query($SQLGymData);
            if ($exerciseNameQuery == false)
                $feedback = "Error while sending data!";
        }
    }
    else
        $feedback = "Error while sending data!";
    
}
else

    $feedback = "Error while sending data!";

 echo '<form action="../Activities/Gym.php" id="feedbackForm" method="GET">
         <input type="text" name="feedback" style="display:none" value="'.$feedback.'">
         <input type="submit" style="display:none" id="feedbackSubmit">
          </form>
      <script>
        window.onload = function(){
        var button = document.getElementById("feedbackSubmit");
        button.form.submit();
        }
      </script>';
