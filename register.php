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
                        
                        
                        Choose your sex:<br /> <select name="sex">
                            <option value = "k"> woman</option>
                            <option value = "m"> man</option>
                            <option value = "o"> other</option>
                        </select><br>
                        username: <br /><input type="username" name="username"><br>
                        email adress: <br /><input type="email" name="email"><br>
                        password:<br /> <input type="password" name="password"><br>
                        <div class="buttonrejestr">
                        <input type="submit" value=" zaloz konto "> 
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