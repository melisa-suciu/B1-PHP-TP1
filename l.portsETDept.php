<?php
	echo "Saisir le nom du port :\n" ;
	$nomPort = rtrim( fgets( STDIN ) ) ;

	switch ($nomPort) {
		case "Quibron" ;
		case "Sauzon" ;
		case "Le Palais" ; 
			echo "Departement :\n" , $nomDept = "Morbihan" ;
			break ;
		
		case "Concarneau" ;
		case "Douarnenez" ;
			echo "Departement :\n" , $nomDept = "Finistère" ;
			break ;
		
		case "Piriac-sur-Mer" ;
		case "Pornic" ;
			echo "Departement :\n" , $nomDept = "Loire-Atlantique" ;
			break ;
		
		case "Ile-d'Yeu" ;
			echo "Departement :\n" , $nomDept = "Vendée" ;
			break ;
			
		default :
		          echo $res = "Port non recensé" ;
	}
?>
    
