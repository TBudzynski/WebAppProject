<?php

include_once '../Includes/dbh-inc.php';
session_start();

 $username = $_SESSION['username']; 
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
            $SQLGymData = "INSERT INTO gym_comp(username, exerc_name_comp, exerc_all_series_comp, exerc_this_series_comp, exerc_repetitions_comp, exerc_load_comp, exerc_date_comp) 
                           VALUES('".$username."', '".$_POST['set-name']."', ".$_POST['set-series'].", ".$i.", ".$_POST['repetition-'.$i.''].", ".$_POST['load-'.$i.''].", '".$_SESSION['date']."');";
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

echo '<form action="../Activities/GymComparison.php" id="feedbackForm" method="GET">
        <input type="text" name="feedback" style="display:none" value="'.$feedback.'">
        <input type="submit" style="display:none" id="feedbackSubmit">
      </form>
      <script>
        window.onload = function(){
        var button = document.getElementById("feedbackSubmit");
        button.form.submit();
        }
      </script>';
