<?php
    $title = "Page d'acceuil";
    require "nav-bar.php";
?>
    <div>
        <?php
            afficheCommande($_GET, [$parfums, $cornets, $supplements]);
        ?>
    </div>
    <form action="" method="get">
        <?php foreach($parfums as $k => $prix)
        {
            checkbox('parfum', $k, $_GET, $prix);
        }?>
        <?php foreach($cornets as $k => $prix)
        {
            radio('cornet', $k, $_GET, $prix);
        }?>
        <?php foreach($supplements as $k => $prix)
        {
            checkbox('supplement', $k, $_GET, $prix);
        }?>
        <input type="submit" value="Composer ma glace">
    </form>
    
<?php
    print_r($_GET);
    require "footer.php";
?>