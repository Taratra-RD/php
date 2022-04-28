<?php
    $title = "Page de contact";
    $value = $_GET["heure"];
    require "./nav-bar.php";
    $jours = ($_GET["jours"] ?? date('N'))
?>
    <div class="contact_bar">
        <div class="contact_bar_left">
            <p>Bonjour je suis sur contact !!!</p>
        </div>
        <div class="contact_bar_right">
            <?=in_creneaux(JOURS, CRENEAUX, $_GET["heure"], $jours)?>
           <p>Heure d'ouverture</p>
           <?=date('l d F Y H')?>
           <form action="" method="get">
               <select name="jours" id="">
                   <?=jours_de_la_semaine(JOURS)?>
               </select>
               <select name="heure" id=""  value="<?=$value?>">
                   <?=jours_de_la_semaine(HEURES)?>
               </select>
               <input type="submit" value="Réserver">
           </form>
           <table>
               <?php
                    creneaux_hebdo(JOURS)
               ?>
           </table>
        </div>
    </div>
<?php
    require_once "./footer.php";
?>