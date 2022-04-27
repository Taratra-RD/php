<?php require_once "./controler/fonctionDeVue.php";?>
<nav>   
    <head>
        <title><?php if(isset($title)){echo $title;} else {echo "Mon Site";} ?></title>
        <link rel="stylesheet" href="/style/nav-bar.css">
    </head>
    <body>
        <div class="bar_de_navigation">
            <div class="section_de_navigation logo_de_navigation">
                <?= lien("/index.php", "logo section", "Mon site");?>
            </div>
            <div class="section_de_navigation acceuil_de_navigation petite_section">
                <?= lien("/about.php", "acceuil section", "About");?>
            </div>
            <div class="section_de_navigation contact_de_navigation petite_section">
                <?= lien("/contact.php", "contact section", "Contact");?>
            </div>
        </div>
    </body>
</nav>