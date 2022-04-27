<?php
    $notes = [10, 25, 45];
    function calculMoyenne($array)
    {
        $sum = array_sum($array);
        echo round($sum/sizeof($array), 3);
        
    }
    calculMoyenne($notes);