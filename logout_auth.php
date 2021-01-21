<?php

    setcookie('username','',time()-3600);
    session_destroy();

header('Location: logoutscreen.php');
?>