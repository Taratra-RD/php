<?php
    $run = true;
    $notes = null;
    while($run){
        $note = readline("Entrez le note :");
        if($note != "fin"){
            $notes[] = $note;
        }
        else{
            $run = false;
        }
    }
    echo "nombre d'élève :\n ";
    foreach($notes as $n){
        echo "\t- $n\n";
    }
?>