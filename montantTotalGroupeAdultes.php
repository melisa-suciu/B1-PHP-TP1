<?php
     echo "Prix par adulte: 17€\n" ;
     echo "Saisir le nombre des adultes : " ;
     $MontantAdulte = rtrim(fgets (STDIN)) ;
     $APayer = 17 * $MontantAdulte ;
     echo "Pour " , $MontantAdulte , " adultes , faut payer : " , $APayer, "€\n" ;
     
