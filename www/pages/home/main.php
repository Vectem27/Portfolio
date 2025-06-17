<section id="presentation-section">
    <article id="presentation">
        <p id="pre-title"><?php echo_loc_text('pre-title')?></p>
        <h1>Martin BOURNAT</h1>
        <pre id="quick-presentation">Étudiant en licence d'informatique, et passioné de ce domaine depuis mon plus jeune âge. 
Dés 14 ans j'ai commencer à crée mes propres progammes en java et en C ! 
Je me suis rapidement spécialisé dans le développement logiciel et de jeux vidéo. (En 2021)</pre>
        <div class="links">
            <a href="https://github.com/Vectem27" target="_blank" id="link-github" class="button">
                <span class="icon"></span>
                Github
            </a>
            <a href="https://www.linkedin.com/in/martin-bournat-60a779283" target="_blank" id="link-linkedin" class="button">
                <span class="icon"></span>
                Linkedin
            </a>
            <a href="mailto:bournatmv@gmail.com" id="link-mail" class="button">
                <span class="icon"></span>
                bournatmv@gmail.com
            </a>
        </div>
    </article>
    <img src="/pages/home/resources/images/profile_picture.jpg" alt="profile picture" width="200" height="200"/>
</section>

<section id="skills">
    <h2>Compétences</h2>
    <div id="skill-articles-container" class="articles-container">
        <article>
            <h3 id="languages">Langages</h3>
            <li>
                <ul class="c">
                    <img src="/pages/home/resources/images/c.png" alt="" class="logo">
                    C
                </ul>
                <ul class="cpp">
                    <img src="/pages/home/resources/images/cpp.svg" alt="" class="logo">
                    C++
                </ul>
                <ul class="java">
                    <img src="/pages/home/resources/images/java.svg" alt="" class="logo">
                    Java
                </ul>
            </li>
        </article>
        <article>
            <h3 id="frameworks-libraries">Frameworks et librairies</h3>
            <li>
                <ul class="vulkan">
                    <img src="/pages/home/resources/images/vulkan.svg" alt="" class="logo">
                    Vulkan
                </ul>
                <ul class="wxwidgets">
                    <img src="/pages/home/resources/images/wxwidgets.png" alt="" class="logo">
                    wxWidgets
                </ul>
            </li>
        </article>
        <article>
            <h3 id="softwares-other">Logiciels et autres</h3>
            <li>
                <ul class="unreal-engine">
                    <img src="/pages/home/resources/images/unreal-engine.png" alt="" class="logo">
                    Unreal Engine
                </ul>
                <ul class="cmake">
                    <img src="/pages/home/resources/images/cmake.svg" alt="" class="logo">
                    Cmake
                </ul>
            </li>
        </article>
    </div>
</section>

<section id="projects">
    <h2>Projets</h2>
    <div id="project-articles-container" class="articles-container">
        <article id="wonderwares">
            <h3>Wonderwares</h3>
            <p class="small">Wonderwares est un jeux-video que j'ai imaginé, conçu et developpé entièrement.</p>
            <p class="small">Dans ce jeu, vous incarnez un personnage de fantaisie dans un univers mediévale où vous deverez gérer un échoppe.</p>
            <h4>Apport</h4>
            <p class="small">Depuis son lancement en novembre 2024, ce projet (qui est toujours en cours), m'as permis de prefectionner diverse compétences comme :</p>
            <pre class="tiny">
- Le game design
- L'architecture logiciel (SOLID & Clean architecture)
- La programation modulaire
- L'organisation des taches
            </pre>
        </article>
        <article id="volantistale">
            <h3>Volantis tale</h3>
            <p class="small">Volantis tale est un jeu multi-joueur aliant actions, aventures et combat dans un univers de quêtes et de magie.</p>
            <h4>Apport</h4>
            <p class="small">Bien que les serveurs de ce projet soient désormais fermées, pendant son développement (de octobre 2023 à mai 2024) plusieurs personnes suivaient activement l'avancé de ce projet. Ce projet de grand envergure, était pour moi un défis à mettre en place et m'as permis d'apprendre :</p>
            <pre class="tiny">
- A bâtire un communauté
- La réplication reseau dans les jeux vidéos
- Le developpement c++ sous Unreal Engine
            </pre>
        </article>
        <article id="wxvulkanengine">
            <h3>WxVulkanEngine</h3>
            <p class="small">WxVulkanEngine est commme son nom l'indique, un moteur de jeu que j'ai crée avec wxWidgets et l'api de rendu Vulkan.</p>
            <p class="small">Dans ce moteur j'ai mis en place la géstion d'un scene avec une hierarchie en arborescence des objets (avec transformations relative) et un abstraction complete du RHI (moteur de rendu) ce qui permet l'ajout d'autre api graphiques pour le rendu.</p>
            <h4>Apport</h4>
            <pre class="tiny">
- Architecture modulaire
- Gestion d'une pipeline de rendu
- Optimisation logiciel
- Rendu multi-passes avec géstion dynamique des lumières, des ombres et du post-processing
- Création et compilation multi-platforme
            </pre>
        </article>
    </div>
    <!--TODO: Add a link to a page which present every projects-->
</section>