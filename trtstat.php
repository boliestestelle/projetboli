<?php

include("config/connection.php");
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');
require_once ('src/jpgraph_bar.php');

switch ($_POST['option']) {
	case 'minpiece':
		# code...
	//echo''.$terms;
try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='Croissant';
}
else{
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
$terms='decroissant';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix '.$terms.' par nombre de piece :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 

		break;
	case 'minsur':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
}
else{
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
		case 'minquart':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
}
else{
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
	
	case 'moypiece':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
}
else{
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
	case 'moysur':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
}
else{
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
		case 'moyquart':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
}
else{
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
	
	case 'maxpiece':
		# code...
	
	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
}
else{
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
	case 'maxsur':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
}
else{
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
		case 'maxquart':
		# code...

	try{
 if ($_POST['asc']) {
	# code...
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
}
else{
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
}
        $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 foreach ($resultat as $element) { 
 	echo 'le prix est :'.$element['prixfai'];
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
		break;
	default:
		//echo'happy to see u';
		if (isset($_POST['var'])) {
	try{
		$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
			$sql='SELECT prixfai,dateimport from immobilier ORDER BY dateimport ASC ';
		
		 $query = $bd->prepare($sql);
        $query->execute();
$resultat = $query->fetchAll();
 $e=1;
 foreach ($resultat as $element) {
 $e=$e+1; 
$txt= $element['dateimport'].' '.$element['prixfai']."\n";
fwrite($myfile, $txt);
 }
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 
fclose($myfile);
}

function readsunspotdata($aFile, &$aYears, &$aSunspots) {
    $lines = @file($aFile,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    if( $lines === false ) {
        throw new JpGraphException('Can not read sunspot data file.');
    }
    foreach( $lines as $line => $datarow ) {
        $split = preg_split('/[\s]+/',$datarow);
        $aYears[] = substr(trim($split[0]),0,4);
        $aSunspots[] = trim($split[1]);
    }
}
 
$year = array();
$ydata = array();
readsunspotdata('newfile.txt',$year,$ydata);
 
 // Width and height of the graph
$width = 600; $height = 200;
 
// Create a graph instance
$graph = new Graph($width,$height);
 
// Specify what scale we want to use,
// int = integer scale for the X-axis
// int = integer scale for the Y-axis
$graph->SetScale('intint');
 
// Setup a title for the graph
$graph->title->Set('Variation des prix');
 
// Setup titles and X-axis labels
$graph->xaxis->title->Set('Temps');
 
// Setup Y-axis title
$graph->yaxis->title->Set('(prix');
 
// Create the linear plot
$lineplot=new LinePlot($ydata);
 
// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke();
        $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

// Stroke image to a file and browser

// Default is PNG so use ".png" as suffix
        $fileName = "imagefile.png";
        $graph->img->Stream($fileName);

// Send it back to browser
        $graph->img->Headers();
        $graph->img->Stream();
		break;
}?>





