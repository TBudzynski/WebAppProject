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
                <div class="landing-page-text-fp">
                    <h1> Please, write your email adress!</h1>
                    <div class  ="emailtext-fp">
                        <p >Email</p>

                        <form action="sendemail.php" method="post">
                            <div>
                                <input type="email" name="email" />
                            </div>
                            <input type="submit" value="   Send email!   "> 
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