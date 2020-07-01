$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
        echo 'le prix min'.$terms.' par nombre de piece :'.$element['prixfai'];
 }
 
 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix min '.$terms.' par nombre de piece :'.$element['prixfai'];
 }

//Min quartier
 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix min'.$terms.' par quartier :'.$element['prixfai'];
 }



 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix min '.$terms.' par quartier :'.$element['prixfai'];
 }
 //Min Surface
 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY surface ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix min'.$terms.' par surface :'.$element['prixfai'];
 }

 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY surface DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix min '.$terms.' par surface :'.$element['prixfai'];
 }

 //MAX
 //Max/NbrePiece
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max'.$terms.' par nombre de piece :'.$element['prixfai'];
 }

 $sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max'.$terms.' par nombre de piece :'.$element['prixfai'];
 }

 //Max/quartier
 $sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max'.$terms.' par quartier :'.$element['prixfai'];
 }

 $sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max '.$terms.' par quartier :'.$element['prixfai'];
 }

 //Max/Surface
 $sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY surface ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max'.$terms.' par surface :'.$element['prixfai'];
 }

 $sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY surface DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix max '.$terms.' par surface :'.$element['prixfai'];
 }


//AVG
 //AVG/nbrePiece
 $sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg'.$terms.' par nombre de piece :'.$element['prixfai'];
 }



 $sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg '.$terms.' par nombre de piece :'.$element['prixfai'];
 }
//AVG/Surface
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY surface ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg'.$terms.' par surface :'.$element['prixfai'];
 }	
 $sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY surface DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg'.$terms.' par surface :'.$element['prixfai'];
 	
 }
 //AVG/quartier
 $sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg'.$terms.' par quartier :'.$element['prixfai'];
 }

 $sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
 $terms='DESC'
 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix avg'.$terms.' par quartier :'.$element['prixfai'];
}