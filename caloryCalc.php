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
                <a href="logoutscreen.php"> Sign out</a>
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
                    <form  action="Caloryauth.php" method="post">
                        Weight:<br /> <input type="number" name="weight" ><br>
                        Height:<br /><input type="number" name="height" ><br>
                        Age:<br /><input type="number" name="age" step="1"><br>
                        
                        <!-- <br /> Choose your gender:<br>
                        <input type="radio"  name="gender" value="m" >
                        <label for="m">Male</label><br>
                        <input type="radio"  name="gender" value="k">
                        <label for="f">Female</label><br>
                        <input type="radio"  name="gender" value="o">
                        <label for="o"><br\>Other<br></label> -->
                        <br /><br /> Physical activity factor:<br /><input type="number" name="paFactor" step="0.1"><br><br> 
                       
                        <div class="buttoncalc">         
                            <br /> I would like to:<br>
                            <input type="radio"  name="decision" value="-300" >
                            <label for="reduce">Reduce my weight</label><br>
                            <input type="radio" id="hold" name="decision" value="0">
                            <label for="hold">Hold my weight </label><br>
                            <input type="radio" id="gain" name="decision" value="300">
                            <label for="gain">Gain my weight</label>
                            <br /> <br /> <input type="submit" value="OK"> <br><br>
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