<?php
    function F1($phrase)
    {
        if (preg_match ("#^[A-Z].[.?!]$#" , "$phrase")) 
        {
        return 'true' ;
        }

    else 
        {
        return 'false' ;
        }
    }

    function F2($texte)
    {
        $tab=preg_split("/ . /" ,"$texte")
        
            return $tab;
        
    }
    
    function F3($espace)
    {
        $tab=preg_replace("#/\s\s+ #,' ' ,$text");
            
            return $tab;

    }









?>
