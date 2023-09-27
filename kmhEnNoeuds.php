<?php	
     echo "Saisir la vitesse en km/h : " ;					
     $vitesseNoeuds = fgets( STDIN) ;
     $vitesseKM = $vitesseNoeuds / 1.852; 
     echo "Résultat de la convesion : " , $vitesseKM , " noeuds\n" ;
?>
