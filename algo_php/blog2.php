<?php
    $run = true;
    $j = 0;
    $heure = null;
    while($run)
    {
        $i = 0;
        while($i<2 && $run)
        {
            $heure = readline("entrer une heure : ");
            if($heure == "fin")
            {
                $run = false;
            }
            else
            {
                $plageHoraire[$j][] = (int)$heure;
                $i++;
            }
            
        }
        $j++;
    }

    foreach($plageHoraire as $horaire)
    {
        echo "On ouvre à $horaire[0]H jusqu'à $horaire[1]H\n";
    }

?>