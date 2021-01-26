<?php
session_start();
$username=$_SESSION['username'];
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
            <a class="nav-logo"  href="newMainPage.php" > SportProgressApp</a>
            <p style="color:white"> Hello <?php echo "$username". "!"; ?> </p>
            <div class = "nav-links">
           
                <a href="aboutus.php">About us</a>
                <a href="logout_auth.php">Sign out</a>

            </div> 

    </nav>
    <section class ="landing-page">
        <div class="landing-page-mainpage-options">
            <ul>
                
                <li><a href="MyResult.php" > My Results </a>
                <!-- <ol>
                    <li><a href="#" > Cycling </a></li>
                    <li><a href="#" > Walking </a></li>
                    <li><a href="#" > Running </a></li>
                    <li><a href="#" > Gym</a></li>
                    <li><a href="#" > Swimming </a></li>
                   
                </ol> -->
                
                
                
                
                </li><li><a href="PersonalRecord.php" >Personal records</a>
                    <!-- <ol>
                        <li><a href="#" > Cycling </a></li>
                        <li><a href="#" > Walking </a></li>
                        <li><a href="#" > Running </a></li>
                        <li><a href="#" > Gym</a></li>
                        <li><a href="#" > Swimming </a></li>
                       
                    </ol> -->
              
               <li><a href="caloryCalc.php" >Calory Calculator</a>  </li>
                </li><li><a href="Mydiet.php" >My diet</a>
                <!-- <ol>
                    <li><a href="#" > Change password </a></li>
                    <li><a href="#" > Delete account </a></li> 
                </ol> -->
               
                <!-- <ol>
                    <li><a href="#" > Change password </a></li>
                    <li><a href="#" > Delete account </a></li> 
                </ol> -->
                </li><li><a href="SettingsMenu.php" >Settings</a>
            </div>
        
            <div>
            <div class="calendar">
            
            <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div data-modal-target="#modal" class="days"></div>
      </div>
    </div>
        <!-- PONIZEJ JEST POPUP -->

      <div class="modal" id="modal">
        <div class="modal-header">
          <div class="title"></div>
          <button class="close-button">&times;</button>
        </div>
        <div class="modal-body" id="modal-body">
          <form action="Activities/redirection.php" method="POST" id="form">
            <textarea name="date" id="hiddenTitle" style="display:none"></textarea>
              <div class="radio-toolbar">
                <b>Planned activities:</b><br>
                <input type="radio" id="radioGym" name="activityButton" value="gym">
                <label for="radioGym">Gym</label>

                <input type="radio" id="radioSwimming" name="activityButton" value="swimming">
                <label for="radioSwimming">Swimming</label>

                <input type="radio" id="radioJogging" name="activityButton" value="jogging">
                <label for="radioJogging">Jogging</label>

                <input type="radio" id="radioCycling" name="activityButton" value="cycling"">
                <label for="radioCycling">Cycling</label><br><br>
                
                <b>Done activities:</b><br>
                <input type="radio" id="radioGymComparison" name="activityButton" value="gymComp">
                <label for="radioGymComparison">Gym</label>
                
                <input type="radio" id="radioSwimmingComparison" name="activityButton" value="swimmingComp">
                <label for="radioSwimmingComparison">Swimming</label>
                
                <input type="radio" id="radioJoggingComparison" name="activityButton" value="joggingComp">
                <label for="radioJoggingComparison">Jogging</label>
                
                <input type="radio" id="radioCyclingComparison" name="activityButton" value="cyclingComp">
                <label for="radioCyclingComparison">Cycling</label><br><br>
              </div>
              <input type="submit" value="Edit choosen activity"/>
          </form>
        </div>
      </div>
      <div id="overlay"></div>

    <script src="script.js"></script>
            
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
                    <a href="mailto:toomoo199@wp.pl">Napisz do nas maila</a>
                </div>
            </div>
         </div>
         
         </footer>
</body>
</html>