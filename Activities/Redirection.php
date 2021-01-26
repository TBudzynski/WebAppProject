<?php

session_start();

if(isset($_POST['activityButton'])){
    $_SESSION['date'] = $_POST['date'];
    switch($_POST['activityButton']){
        case "gym":
            header('Location: gym.php');
            break;
        case "swimming":
            header('Location: swimming.php');
            break;
        case "jogging":
            header('Location: jogging.php');
            break;
        case "cycling":
            header('Location: cycling.php');
            break;
        case "gymComp":
            header('Location: gymComparison.php');
            break;
        case "swimmingComp":
            header('Location: swimmingComparison.php');
            break;
        case "joggingComp":
            header('Location: joggingComparison.php');
            break;
        case "cyclingComp":
            header('Location: cyclingComparison.php');
            break;
        default:
            break;
    }
}
    
?>