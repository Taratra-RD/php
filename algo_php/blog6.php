<?php
    //filtre à insulte
    $insultes = ['merde', 'con'];

    $phrase = readline("Entrez votre phrase : ");
    foreach($insultes as $insulte)
    {
        $premierLettre = substr($insulte, 0, 1);
        $long = strlen($insulte)-1;
        $phrase = str_replace($insulte, $premierLettre.str_repeat("*", $long), $phrase);
    }
    echo "$phrase\n";