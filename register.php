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
                    <h1> Join us! </h1>
                    <h2> ... and be active! </h2>
                </div>
                <div class="registeroptions">
                    <form  action="auth.php" method="post">
                        Name:<br /> <input type="text" name="nameu"><br>
                        Surname:<br /><input type="text" name="surname"><br>
                        <br /> Choose your gender:<br>
                        <input type="radio"  name="sex" value="m" >
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="sex" value="k">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="sex" value="o">
                        <label for="other"><br\>Other<br></label>
                        <br /> username: <br /><input type="username" name="username"><br> 
                        email adress: <br /><input type="email" name="email"><br>
                        password:<br /> <input type="password" name="password"><br>
                        <div class="buttonrejestr">                         
                        <input type="submit" value="   Create an account!   "> 
                        </div>
                       
                    </form>
                    <div class="buttonrejestihaveaccount">
                    <a href="log.php"> <button>I have an account</button></a>
                        </div>
                      
                        
                        
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