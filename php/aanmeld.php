<?php?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transformers Community</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/aanmeld.css">
    </head>
        
    <body>
        <header class="header">
            <img class="logo" src="../logo/logo_small.png" alt=""><input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
            <ul class="menu">
                <li>  <a href="../index.html"><h2>Home</h2></a></li>
                <li> <a href="../html/over-ons.html"><h2>Over ons</h2></a></li>
                <li> <a href="../html/word-transformer.html"><h2>Word Transformer!</h2></a></li>
                <li> <a href="../html/contact.html"><h2>Contact</h2></a></li>
            </ul>
        </header>
        <div class="login">
            <button>Aanmelden</button>
            <button>Login</button>
        </div>
    
        <div class="formulier">
            <form action="" method="POST">
                
                
                <div class="form-group">
                    <label for="voornaam">voornaam:</label>
                    <input type="text" name="voornaam" value="" class="form-input" id="voornaam" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="achternaam">achternaam:</label>
                    <input type="text" name="achternaam" value="" class="form-input" id="achternaam" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="username">username:</label>
                    <input type="text" name="username" value="" class="form-input" id="username" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="" class="form-input" id="email" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="wachtwoord">wachtwoord:</label>
                    <input type="password" name="wachtwoord" value="" class="form-input" id="wachtwoord" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="gender">gender:</label>
                    <br>
                    <div>
                        <input type="radio" name="gender" value="female" value="" class="form-input" id="gender">Vrouw
                    </div>
                    <div>
                        <input type="radio" name="gender" value="male" value="" class="form-input" id="gender">Man
                    </div>
                    <div>
                        <input type="radio" name="gender" value="other" value="" class="form-input" id="gender">Zeg ik liever niet
                    </div>
                </div>
                <br>
                <button type="submit" class="btn submit-btn">registreer</button>
            </form>
        </div>

        <div class="footer">
        <div class="slogun-footer">
            <h1>Transformer</h1><h1>Community</h1><br>
            <h3>Wij empoweren jongeren</h3><h3>om mentaal gezond te zijn</h3>
        </div>
        <div class="social">
            <h2>Volg ons op:</h2>
            <a href="https://www.facebook.com/transformers.community" target="_new"><img src="../foto's/facebook.png" alt="" class=""></a>
            <a href="https://www.instagram.com/transformer.community/" target="_new"><img src="../foto's/instagram.png" alt="" class=""></a>
            <a href="https://www.linkedin.com/company/transformerscommunity" target="_new"><img src="../foto's/linkedin.png" alt="" class=""></a>
            <a href="https://www.youtube.com/channel/UCvN0_IYGVy6s1jFj2enGIsw" target="_new"><img src="../foto's/youtube.png" alt="" class=""></a>
            <h5>(klik de icon!)</h5>
        </div>
        <div class="footer-navigatie">
            <ul class="footer-menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../html/over-ons.html"><h3>Over ons</h3></a></li>
                <li><a href="../html/word-transformer.html"><h3>Word Transformer!</h3></a></li>
                <li><a href="../html/contact.html"><h3>Contact</h3></a></li>
            </ul> 
        </div>
    </div>
        
    </body>
    </html>
<?php?>