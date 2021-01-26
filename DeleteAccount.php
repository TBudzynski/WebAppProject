<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
            <a class="nav-logo"  href="newMainPage.php" >SportProgressApp</a>
                <div class = "nav-links">
                    <a href="aboutus.php">About us</a>
                    <a href="logout_auth.php">Log out</a>
                   
                </div>
        </div> 
    </nav>
    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
                <div class="landing-page-text">
                   
             
                    <form  action="DeleteAccountAuth.php" method="post">
                        <div class="logoptions">
                                Password:<br /><input type="password" name="password"><br> 
                                 <input type="checkbox"  name="Delete" value="delete"> 
                                <label for="Delete">Are you sure?</label>
  
                              <br/>  <input type="submit" value="Delete my account!"> <br>
                        </div>    
                    </form>  
                  <?php
                
                  
                  if(isset($_SESSION['password']))
                  {
                  echo '<div class ="error">'.$_SESSION['blad'],'</div>';
                  unset($_SESSION['password']);
                  }

                  ?>
                    
                </div>              
            </div>
        </div>
        
    </section>
<footer>
    <div class="container">
        <div>         
        <a href="#"> Regulamin </a>
        </div>
            <div class="footer-contact" id="kontakt">
                <a href="tel:+47777888999">Zadzwoń teraz na naszą infolinię</a>
                <a href="mailto:kontakt@nazwafirmy.xyz">Napisz do nas maila</a>
            </div>
    </div> 
</footer>
</body>
</html>