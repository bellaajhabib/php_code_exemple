<?php

namespace App\string;

class ShowCharacter
{
    public function showCha()
    {

        $var = 42;
        echo 'Une chaîne <br>'; // Une chaîne
        echo 'Pas de remplacement de $var <br>'; // Pas de remplacement de $var
        echo 'Je suis une chaîne utilisant un guillemet : pour l\'appeler <br>'; // Je suis une chaîne utilisant un guillemet : pour l'appeler
        return 'dd';
    }

    public function showDoublesQuotes()
    {
        echo "<pre>Saut de ligne :autre ligne.</pre>";
        // Tabulation : 	 après.
        echo "<pre>Tabulation : 	 après.</pre>";
        // Echappement signe $ et guillemet double :
        echo "<pre>Echappements : $ </pre > "; // Echappements : $ ";
        return 'dd';
    }

    public function showHeredoc()
    {

        $var = 42;
        echo "<pre>";
        echo <<<FIN
      Une chaîne de caractères
      avec des guillemets ' et ".
      Une variable $var.
      De l'unicode 🙄
FIN;
        echo "</pre>";
        /*  Une chaîne de caractères
          avec des guillemets ' et ".
          Une variable 42.
          De l'unicode 🙄 */
        return 'dd';
    }

    public function acesToString()
    {
        $chaine = 'Une chaîne pour tester';
        echo <<<FIN
                $chaine[1]
                $chaine[-2]
FIN;

    }

        public function getStrln()
    {
        $char ="été";
        for ($i = 0; $i < strlen($char); $i++) {
      //          echo $char[$i].'<br/>';
    //echo '<br/>'.ord($char[$i]) . " ";
}
        return mb_strlen($char);

    }
}