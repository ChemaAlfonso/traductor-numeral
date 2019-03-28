<?php

function traducirAnumeros($texto){
    $output = '';
    $abecedarioNumerico = array(

        'alpha' => array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z','¿','?','!','$','€','+','-','=','1','2','3','4','5','6','7','8','9','0'),

        'numeric' => array('4','8','C','D','3','F','6','H','1','J','K','L','M','N','Ñ','0','9','Q','R','5','7','U','V','W','X','Y','Z','¿','?','!','$','€','+','-','=','1','2','3','4','5','6','7','8','9','0')
    );

    $textoaSegmentado = str_split($texto);

    for($i = 0; $i < strlen($texto); $i++){
       for($e = 0;$e < 45;$e++){
           if($textoaSegmentado[$i] == ' '){
               $output .= " ";
           }elseif(strtolower($textoaSegmentado[$i]) == $abecedarioNumerico['alpha'][$e]){
               $output .= $abecedarioNumerico['numeric'][$e];
           }
       }
   }
   return $output;
}