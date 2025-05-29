<?php

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>

        <!-- Project styles -->
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <nav>
            <!--LOGO (optional)-->
            
            <button id="toggle-theme-btn">Changer le thème</button>
            
            <select id="language-select">
                <option value="fr">Français</option>
                <option value="en">English</option>
            </select>
        </nav>

        <main>
            <article id="presentation-article">
                <p id="pre-title"></p>
                <h1>Martin BOURNAT</h1>
                <pre id="quick-presentation"></pre>
                <div class="links">
                    <a href="https://github.com/Vectem27" target="_blank" id="link-github">
                        <span class="icon"></span>
                        Github
                    </a>
                    <a href="https://www.linkedin.com/in/martin-bournat-60a779283" target="_blank" id="link-linkedin">
                        <span class="icon"></span>
                        Linkedin
                    </a>
                </div>
            </article>
            <img src="resources/images/profile_picture.jpg" alt="profile picture" width="200" height="200"/>
        </main>

        <section>

        </section>

        <footer>

        </footer>

        <script src="themes.js"></script>
        <script src="lang.js"></script>
    </body>
</html>