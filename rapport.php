<?php
include("config/connection.php");
//include("html2pdf-master/src/Html2Pdf.php");
use Spipu\Html2Pdf\Html2Pdf;
if (isset($_SESSION["ID"])) {

require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');
require_once ('src/jpgraph_bar.php');


    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Rapport</title>
    </head>
    <body>
    <?php
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min'.$terms.' par nombre de piece :'.$element['prixfai']."\n");
    $resultats.='<p>le prix min'.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}https://www.blot-immobilier.fr/habitat/achat/maison/ille-et-vilaine/

$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min '.$terms.' par nombre de piece :'.$element['prixfai']."\n");

    $resultats.='le prix min'.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}

//Min quartier
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min'.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix min'.$terms.' par quartier :'.$element['prixfai']."\n";
}



$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min '.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix min '.$terms.' par quartier :'.$element['prixfai']."\n";
}
//Min m2
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min'.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.='le prix min '.$terms.' par m2 :'.$element['prixfai']."\n";
}

$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix min '.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.='le prix min '.$terms.' par m2 :'.$element['prixfai']."\n";
}

//MAX
//Max/NbrePiece
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max'.$terms.' par nombre de piece :'.$element['prixfai']."\n");
    $resultats.='le prix max'.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}

$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max'.$terms.' par nombre de piece :'.$element['prixfai']."\n");
    $resultats.='le prix max'.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}

//Max/quartier
$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max'.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix max '.$terms.' par quartier :'.$element['prixfai']."\n";
}

$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max '.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix max '.$terms.' par quartier :'.$element['prixfai']."\n";
}

//Max/m2
$sql='SELECT MIN(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max'.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.=''."\r".'le prix max '.$terms.' par m2 :'.$element['prixfai']."\r";
}

$sql='SELECT MAX(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix max '.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.='le prix max '.$terms.' par m2 :'.$element['prixfai']."\n";
}


//AVG
//AVG/nbrePiece
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg'.$terms.' par nombre de piece :'.$element['prixfai']."\n");
    $resultats.='le prix avg'.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}



$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY nbrepiece DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg '.$terms.' par nombre de piece :'.$element['prixfai']."\n");
    $resultats.='le prix avg '.$terms.' par nombre de piece :'.$element['prixfai']."\n";
}
//AVG/m2
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY m2 ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg'.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.='le prix avg'.$terms.' par m2 :'.$element['prixfai']."\n";
}
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY m2 DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg'.$terms.' par m2 :'.$element['prixfai']."\n");
    $resultats.='le prix avg'.$terms.' par m2 :'.$element['prixfai']."\n";

}
//AVG/quartier
$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier ASC ';
$terms='ASC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg'.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix avg'.$terms.' par quartier :'.$element['prixfai']."\n";
}

$sql='SELECT AVG(prixfai) as prixfai from immobilier ORDER BY quartier DESC ';
$terms='DESC';
$query = $bd->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
foreach ($resultat as $element) {
    echo nl2br('le prix avg'.$terms.' par quartier :'.$element['prixfai']."\n");
    $resultats.='le prix avg'.$terms.' par quartier :</p>'.$element['prixfai']."";
}

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


?>



    <img src="imagefile.png">
<p>RAPPORT PDF</p>

</body>
</html>

<?php
//echo nl2br($resultats);
require __DIR__.'/vendor/autoload.php';

try{
    $content=ob_get_clean();
    $html2pdf = new Html2Pdf();
    //$html2pdf->writeHTML(nl2br($resultats));
    $html2pdf->writeHTML($content);
    $html2pdf->output();
}
catch(HTM2PDF_exception $e){
    die($e);

}

} else {
    ?>
    <form action="" METHOD="post">
        <label for="user">Entre le nom d'utilisateur</label>
        <input type="text" name="user">

        <label for="pass"> Entre le mot de passe</label>
        <input type="text" name="pass">
        <button type="submit">Connexion</button>
    </form>
    <?
}
