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
                <div class="landing-page-text">

                    <script class=randomtekstinindex>
                            Array.prototype.random = function(limit)
                            {
                                if (typeof limit == 'undefined' || limit < 0) limit = 1;
                                else if (!limit) limit = this.length;
                                for (var i = 0, source = this, target = new Array(), n = source.length; i < limit && n > 0; i++)
                                {
                                    do { var index = Math.random(); } while (index == 1);
                                    index = Math.floor(index * n);
                                    target.push(source[index]);
                                    source[index] = source[--n];
                                }
                                return target;
                            }

                            document.write(new Array(
                            // Tu wpisz kolejne elementy:

                            'Health is important, take care for it!',
                            'If you will eat less, you weight less',
                            'If you are tired, exercise will help',
                            'Bananas can help improve your mood',
                            'Drinking coffee can prevent depression',
                            'Music improves workout performance',
                            'Working out enables you to sleep better'


                            ).random().join(''));
                    </script>

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
                <a href="mailto:toomoo199@wp.pl">Napisz do nas maila</a>
            </div>
        </div> 
    </footer>
</body>
</html>