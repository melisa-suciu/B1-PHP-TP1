<?php
     echo "Saisir la temperature en °C : " ;
     $celsiusfahr = fgets( STDIN ) ;
     $tempenfahr = 1.8 * $celsiusfahr + 32 ;
     echo "Temperature en °F : " , $tempenfahr , "°F\n" ;
?>
