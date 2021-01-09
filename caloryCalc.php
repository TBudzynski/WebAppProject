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
            <a class="nav-logo"  href="index.php" > SportProgressApp</a>
            <div class = "nav-links">
                <a href="aboutus.php">About us</a>
                <a href="log.php" >Log in</a>
                <a href="register.php"> Register</a>
            </div>
       </div> 
    </nav>

    <section class ="landing-page">
        <div class="landing-page-shadow">
            <div class="container">
           
                <div class="landing-page-text-register">
                    <h1> Eat smart </h1>
                    <h2> ... and look great! </h2>
                </div>
                <div class="registeroptions">
                    <form  action="auth.php" method="post">
                        Weight:<br /> <input type="number" name="weight" step="10"><br>
                        Height:<br /><input type="number" name="height" step="10"><br>
                       <br /> Choose your gender:<br>
                        <input type="radio"  name="sex" value="male" >
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="sex" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="sex" value="other">
                        <label for="other">Other</label>
                      <br />  <br /> Physical activity factor:<br /><input type="number" name="paFactor" step="0.1"><br><br> 
                        <div class="buttoncalc">      <br>                   
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