<?php

include_once '../Includes/dbh-inc.php';
session_start();
$username = $_SESSION['username'];
$feedback = "Error! Data not deleted.";

if (isset($_POST['name'])){
    $SQLDeleteName = "DELETE FROM gym_names WHERE username = '".$username."' AND exerc_name = '".$_POST['name']."';";
    $DeleteNameQuery = $con->query($SQLDeleteName);

    if ($DeleteNameQuery == false){
        $feedback = "Error! Data not deleted.";
    }
    else 
        $feedback = "Data deleted correctly!";
}

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

