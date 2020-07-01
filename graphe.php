<?php

require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');
require_once ('src/jpgraph_bar.php');

try{


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
}
catch(PDOException $e){
    echo'ok'.$e->getMessage();
}
