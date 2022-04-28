<pre>
<?php
require_once (dirname(__FILE__).DIRECTORY_SEPARATOR."./controler/fonctionDeVue.php");
    function footer_nav($lien, $affichage)
    {?>
        <li>
            <?=lien($lien, "",$affichage);?>
        </li>
<?php }
?>
</pre>
<foot>
    <p>Lorem ipsum dolor sit</p>
    <ul>
        <?php
            footer_nav("/contact.php", "Contactez nous !");
            footer_nav("/index.php", "Page d'aceuil.");
            footer_nav("/about.php", "Ce qu'il faut savoir :)")
        ?>
    </ul>
</foot>