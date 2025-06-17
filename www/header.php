<nav>
    <button id="nav-hamburger"><span class="icon"></span></button>

    <!--LOGO (optional)-->
    <?php route_request('nav.php'); ?>
    
    <button id="toggle-theme-btn" class="nav-element"><?php echo_loc_text('theme-button')?></button>
    
    <select id="language-select" class="nav-element">
        <option value="fr" <?php if ($lang == "fr") echo "selected"?>>Français</option>
        <option value="en" <?php if ($lang == "en") echo "selected"?>>English</option>
    </select>
</nav>