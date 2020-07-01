<?php
  //echo 'onAIR';

include 'config/connection.php';

if ($_POST['link']) {
  # code...

  include('simple_html_dom.php');
 // $websetUrl ="http://www.palmbeachcodeschool.com/news/";
 
  $websetUrl =$_POST['link'];
 
  $html =file_get_html($websetUrl);
  //abb-blog-post-section
 // foreach($html->find('.uabb-blog-post-section')as $postDiv)
  foreach($html->find('.innerBloc') as $postDiv){
      foreach ($postDiv->find('.title_part2') as $s) {
         preg_match('/<div class=".*">(.*?)<\/div>/s', $s, $match);
    $quartier = $match[1]; 
   // echo $quartier;
  }
  foreach ($postDiv->find('.ref') as $sr) {
       preg_match('/<span .*>(.*?)<\/span>/s', $sr, $match);
    $reference = $match[1];
}
foreach ($postDiv->find('.title_part1') as $l) {
    foreach ($l->find('a') as $ld) {
        preg_match('/<a .*>(.*?)<\/a>/s', $ld, $match);
      $immo = $match[1];
 // die(var_dump($immo));// = $ld;
}

}


  $t=0;
foreach ($postDiv->find('strong') as $r) {
    $t++;
    if($t==1){
        preg_match('/<strong>(.*?)<\/strong>/s', $r, $match);
     $nbrePiece=$match[1];
    }
    if ($t == 2) {
 preg_match('/<strong>(.*?)<\/strong>/s', $r, $match);
$metreCarre = $match[1];
}

if ($t == 3) {
   preg_match('/<strong>(.*?)<\/strong>/s', $r, $match);
$prix = substr($match[1],0,-6);
$prix = str_replace(' ', '', $prix);
  $t=0;
}
}

//echo substr($prix, 8,);
echo $quartier . date('l jS \of F Y h:i:s A') .'<br>';
echo $immo. '<br>';
echo $reference. '<br>';
echo 'le nbre de piece est :' . $nbrePiece . '<br>';
echo 'le nbre de m2 est :' . $metreCarre . '<br>';
echo 'le prix est :' . $prix . '<br>';
$date=date('Y-m-d H:i:s');

try{
 $sql = 'INSERT INTO immobilier (reference, ville,type,quartier,nbrepiece,prixfai,m2,dateimport) VALUES(:ref,:vil,:type,:quartier,:nbrepiece,:prixfai,:m2,:dateimport)';
        $query = $bd->prepare($sql);
        $query->execute(array(
            "ref" => $reference,
            "vil" => $quartier,
            "quartier"=> $quartier,
            "type" => $immo,
            "prixfai" => intval($prix),
            "m2" => $metreCarre,
            "nbrepiece" => $nbrePiece,
            "dateimport" => $date
        ));
    }catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
} 

    
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Traitement</title>
</head>
<body>

<a href="stat.php">Statistique</a> <br>
<a href="index.php">Accueil</a>
</body>
</html>
