 <?php
    //test palindrome
    function palindrome($string)
    {
      $string = strtolower($string);
      $newString = strrev($string);
      if($newString == $string)
      {
         echo "- $string est un palindrome ! \n";
      }
      else
      {
         echo "- $string est différent de {$newString}. \n";
      }
    }
    $run = true;
    while($run)
   {
       $str = readline("Entrez un mot : ");
       if($str != "")
       {
          palindrome($str);
       }
       else
       {
          $run = false;
       }
   }