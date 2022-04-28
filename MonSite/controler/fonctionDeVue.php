<?php
    require_once (dirname(__FILE__).DIRECTORY_SEPARATOR."../data.php");
    require_once (dirname(__FILE__).DIRECTORY_SEPARATOR."../config/config.php");

    function lien($lien, $classe = "", $label)
    {
        if($_SERVER['SCRIPT_NAME'] === $lien):
        ?>
            <a href="<?=$lien; ?>" class="<?=$classe;?> activer"><?=$label?></a>
        <?php else:?>
            <a href="<?=$lien; ?>" class="<?=$classe;?>"><?=$label?></a>
        <?php endif;
    }

    function checked($data, $value, $name)
    {
        if(isset($data[$name]) && in_array($value, $data[$name]))
        {
            return "checked";
        }
        else
        {
            return "";
        }
    }
    function afficheCommande($data, $names)
    {
        $res = 0;
        foreach($data as $new_data)
        {
            foreach($new_data as $new_data1)
            {
                foreach($names as $name)
                {
                    foreach($name as $k=>$n)
                    {
                        if ($new_data1 == $k)
                        {?> 
                            <li><?=$k?></li>  
                        <?php 
                        $res += $n;}
                    }
                }
            }
        }
        ?>
        <p><?=$res?></p>
        <?php 
    }
        
    function checkbox(string $name, string $value, array $data, $prix)
    {
        ?>
        <label for="<?=$value?>">
            <input type="checkbox" name="<?=$name?>[]" id="<?=$value?>" value="<?=$value?>" <?=checked($data, $value, $name)?>>
            <?= $value?> - <?= $prix?><br>
        </label>    
        <?php
    }
    function radio(string $name, string $value, array $data, $prix)
    {
        ?>
        <label for="<?=$value?>">
            <input type="radio" name="<?=$name?>[]" id="<?=$value?>" value="<?=$value?>" <?=checked($data, $value, $name)?>>
            <?= $value?> - <?= $prix?><br>
        </label>    
        <?php
    }

    function ouverture()
    {
        ?>
        <tr>
                <td><label for="">Heure d'ouverture : </label></td>
                <td><input type="number" name="ouverture" id="" value="<?=$_GET['ouverture']?>"></td>
        </tr>
        <?php
        if(isset($_GET['ouverture']) && $_GET['ouverture']>0)
        {
            echo "heure d'ouverture valide";
        }
        else
        {
            echo "veuillez entrer une heure d'ouverture valide";
            $_GET = null;
        }
    }

    function fermeture()
    {
        ?>
        <tr>
                <td><label for="">Heure de fermeture : </label></td>
                <td><input type="number" name="fermeture" id="" value="<?=$_GET['fermeture']?>"></td>
        </tr>
        <?php
        if(isset($_GET['fermeture']) && $_GET['fermeture']>0)
        {
            echo "heure de fermeture valide";
        }
        else
        {
            echo "veuillez entrer une heure de fermeture valide";
            $_GET['fermeture'] = 0;
        }
    }

    function dump($element)
    {
        ?>
        <pre>
            <?php
                var_dump($element);
            ?>
        </pre>
        <?php
    }

    function creneaux_html(array $crenaux):string
    {
        $creneaux = [];
        foreach($crenaux as $creneau)
        {
            $creneaux[] = "de {$creneau[0]}h à {$creneau[1]}h";
        }
        return $heure_ouverture = "Ouvert ".implode(" et ", $creneaux);
    }

    function jours_de_la_semaine($entite)
    {
        foreach($entite as $k=>$j)
        {
            
            ?>
                <option value="<?=$k?>"><?=$j?></option>
            <?php
        }
    }

    function creneaux_hebdo(array $jours)
    {
        foreach($jours as $k => $jour)
        {
            $creneaux = creneaux_html(CRENEAUX[$k]);
            ?>
            
            <?php
            if(count(CRENEAUX[$k]) != 0)
            {
                ?>
                    <tr <?php if($k+1 === (int)date('N')){ ?> style="color:green"<?php } ?>>
                        <td><strong><?=$jour?>:</strong></td>
                        <td><?= $creneaux?></td>
                    </tr>
                <?php
            }
            else
            {
                ?>
                    <tr <?php if($k+1 === (int)date('N')){ ?> style="color:green"<?php } ?>>
                        <td><strong><?=$jour?>:</strong></td>
                        <td>fermé</td>
                    </tr>
                <?php
            }
        }
        ?>
        
        <?php
    }
    
    function in_creneaux($jours, $creneau, $heure, $j)
    {
        foreach($jours as $k => $jour)
        {
            $creneaux = $creneau[$j];
            if(!empty($creneaux))
            {
                if($creneaux[0][0]<$heure && $heure<$creneaux[0][1] || $creneaux[1][0]<$heure && $heure<$creneaux[1][1])
                {
                    ?>
                        <div class="magasin-ouvert">
                            <p>Le magasin est ouverte!</p>
                        </div>
                        
                    <?php
                    break;
                }
                else
                {
                    ?>
                        <div class="magasin-ferme">
                            <p>Le magasin est fermé!</p>
                        </div>
                    <?php
                    break;
                }
            }
            
            else
            {
                ?>
                    <div class="magasin-ferme">
                        <p>Le magasin est fermé!</p>
                    </div>
                    
                <?php
                break;
            }
        }
    }
?>