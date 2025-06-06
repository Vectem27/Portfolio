<nav>
    <button id="nav-hamburger"><span class="icon"></span></button>

    <!--LOGO (optional)-->
    <?php route_request('nav.php'); ?>
    
    <button id="toggle-theme-btn" class="nav-element">Changer le thème</button>
    
    <select id="language-select" class="nav-element">
        <option value="fr">Français</option>
        <option value="en">English</option>
    </select>
</nav>