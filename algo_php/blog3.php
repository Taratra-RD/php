<?php
    $creneau = null;
    $run = true;
    $i = 0;

    while($run)
    {
        while($i>=0 && $run)
        {
            $res = readline("Voudriez vous ajouter une nouvelle creneau ?\n");
                if($res == "o" || $res == "O")
                {
                    $creneau[$i]["debut"] = (int)readline("Heure d'ouverture : ");
                    $creneau[$i]["fin"] = (int)readline("Heure de fin : ");
                    if($creneau[$i]["debut"] < $creneau[$i]["fin"])
                    {
                        $i++;
                    }
                    else
                    {
                        echo "L'heure du debut : $creneau[$i]['debut'] doit être inférieure à l'heure de fin : $creneau[$i]['fin']";
                        $creneau[$i]["debut"] = 0;
                        $creneau[$i]["fin"] = 0;
                    }
                }
                elseif($res == "n" || $res == "N")
                {
                    $run = false;
                }
                else
                {
                    continue;
                }
            {
                
            }
        }
    }

    foreach($creneau as $heureSlot)
    {
        echo ("le magasin ouvre de ".$heureSlot['debut']."h à ".$heureSlot['fin']."h. \n");
    }
/*
    $heures = (int)readline("A quel heure voulez vous visitez le magasin ?");
    $creneauTrouver = false;
    foreach($creneau as $heure)
    {
       if($heures>$heure["debut"] && $heures<$heure["fin"])
       {
           $creneauTrouver = true;
           break;
       }
       
    }

    if($creneauTrouver == true)
    {
        echo "bienvenue chez nous :)";
    }
    else
    {
        echo "nous somme fermer :/";
    }
*/