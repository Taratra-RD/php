<?php
    $title = "Page de renseignement";
    $creneau = null;
    require "nav-bar.php";
?>
    <form action="" method="get">
        <table>
            <?php
                ouverture();
                if ($_GET != null)
                {
                    fermeture();
                }
            ?>
            <tr>
                <td><input type="submit" value="Ajouter creneau"></td>
            </tr>
        </table>
    </form>
    <?php
    var_dump($_GET)
     ?>
<?php
    require "footer.php";
?>