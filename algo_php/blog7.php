<?php
/**************************************************************/
     function repondre_oui_non()
     {
        while(true)
        {
           $res = readline("voulez vous continuer (o/n) : ");
           if($res === "o" || $res === "O")
           {
               return true;
           }
           elseif($res === "n" || $res === "N")
           {
               return false;
           }
           else
           {
               continue;
           }
        }
     }
     function demander_creneau($str = null)
     {
        while(true)
        {
        $creneau["debut"] = readline("Heure d'ouverture : ");
        if($creneau["debut"]>0 && $creneau["debut"]<23)
        {
            break;
        }
        }
        while(true)
        {
            $creneau["fin"] = readline("Heure fermeture : ");
            if($creneau["fin"]>0 && $creneau["fin"]<23 && $creneau["fin"]>$creneau["debut"])
            {
                break;
            }
        }
        return $creneau; 
     }
     function demander_creneaux($str = "Veuillez entrer un creneau\n")
     {
       $creneaux = [];
       $continuer = true;
       while($continuer)
       {
           $creneaux[] = demander_creneau($str);
           $continuer = repondre_oui_non();
       }
       return $creneaux;
     }
/**************************************************************/
    // $resultat = repondre_oui_non('Vouler vous continuer ?');
    //$creneau = demander_creneau();
    $creneau2 = demander_creneaux(); 
    //var_dump($creneau);
    var_dump($creneau2);
?>