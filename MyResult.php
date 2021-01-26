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
            <div class = "nav-links">
               
                <a href="logout_auth.php" >Log out</a>
                
            </div>
       </div> 
    </nav>

    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
        
              
                <div class="history-activity">
                    <form  action="MyResults_auth.php" method="post">
                        Starting date: <br /> <input type="date" name="startingDate"><br>
                        Finish date: <br /> <input type="date" name="finishDate"><br>
                        <br /> Type of activity:<br>
                        <input type="radio"  name="activity" value="Cycling" >
                        <label for="Cycling">Cycling</label><br>
                        
                        <input type="radio"  name="activity" value="Jogging" >
                        <label for="Jogging">Jogging</label><br>
                        
                        <input type="radio"  name="activity" value="Swimming" >
                        <label for="Swimming">Swimming</label><br>
                        
                        <input type="radio"  name="activity" value="Gym" >
                        <label for="Gym">Gym</label><br>
                        
                        
                        <div class="buttonactivity">                         
                        <input type="submit" value="   OK   "> 
                        </div>
                       
                    </form>
    
                </div>
            
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