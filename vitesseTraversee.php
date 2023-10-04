<?php
echo " Saisir la vitesse :\n" ;
$vNoeuds = rtrim ( fgets( STDIN ) ) ;
if ( $vNoeuds >= 0) {
	echo " Vitesse : " , $vNoeuds , " noeuds.\n " ;
}
else {
	echo "Vitesse : 0 noeud\n" ;
}
?>
