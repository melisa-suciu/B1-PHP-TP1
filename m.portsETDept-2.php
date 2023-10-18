<?php
	echo "Saisir le nom du port : " ;
	$nomPort = rtrim( fgets( STDIN ) ) ;
	$nomPort = strtolower ($nomPort) ;

	switch ($nomPort) {
		case "quibron" ;
		case "sauzon" ;
		case "le palais" ; 
			echo "Departement : " , $nomDept = "Morbihan";
			break ;
		
		case "concarneau" ;
		case "douarnenez" ;
			echo "Departement :\n" , $nomDept = "Finistère" ;
			break ;
		
		case "piriac-sur-mer" ;
		case "pornic" ;
			echo "Departement : " , $nomDept = "Loire-Atlantique" ;
			break ;
		
		case "ile-d'yeu" ;
			echo "Departement : " , $nomDept = "Vendée" ;
			break ;
			
		default :
		          echo $res = "Port non recensé" ;
	}
?> 
     
