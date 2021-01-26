<?php

$username= $_SESSION['username'];
$SQLExerciseName = "SELECT * FROM gym_names WHERE username = '".$username."';";
$exerciseNameQuery = $con->query($SQLExerciseName);

if ($exerciseNameQuery->num_rows > 0){
    echo "Choose exercise and write how many series you did:";
    echo '<form action="GymComparison.php" method="POST">';
    echo '<select name="name">';

    $exerciseNameQuery = $con->query($SQLExerciseName);
    while ($exerciseName = $exerciseNameQuery->fetch_assoc()){
        echo  '<option value="'.$exerciseName["exerc_name"].'">'.$exerciseName["exerc_name"].'</option>';           
    }
    echo '</select><br><br>'; 
    echo 'Series:<input type="text" name="series" maxlength="64" required=”required”><br><br>
        <input type="submit" value="Submit">
        </form>';
        
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $SQLExerciseName = "SELECT * FROM gym_names WHERE exerc_name = '".$_POST['name']."' and username = $username;";
        $exerciseNameQuery = $con->query($SQLExerciseName);

        if ($exerciseNameQuery->num_rows > 0){
            while ($exerciseName = $exerciseNameQuery->fetch_assoc()){
                if ($exerciseName["exerc_name"] == $_POST['name']){
                    echo '<br>Put data about your repetitions and load in particular series:
                          <form action="../DataScripts/GymDataSenderComparison.php" method="POST">';
                    if (is_numeric($_POST['series']) AND $_POST['series'] > 0){
                        for ($i = 1; $i <= $_POST['series']; $i++){
                            echo $i.' series repetitions:<input type="text" required=”required” name="repetition-'.$i.'"><br>';
                            echo $i.' series load:<input type="text" required=”required” name="load-'.$i.'"><br>';
                        }
                        echo '<input type="text" name="set-name" required=”required” value="'.$_POST['name'].'" style="display:none">
                            <input type="text" name="set-series" required=”required” value="'.$_POST['series'].'" style="display:none">
                            <input type="text" name="date" required=”required” value="'.$_SESSION['date'].'" style="display:none">
                            <input type="submit" value="Submit exercise">
                            </form>';
                    }
                }  
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" AND isset($_GET['feedback'])){
    echo $_GET['feedback'];
}

