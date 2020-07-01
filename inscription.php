
<?php
include 'config/connection.php';

//$id_utilisateur =$_POST["utilisateur"];
//$id_client =$_POST["client"];
$logUser = $_POST["user"];
$passUser = $_POST["pass"];
//$id_client =5;
if (!empty($_POST)){
      $sql = 'SELECT * FROM utilisateur WHERE user  = :username AND pass= :password';
        $query = $bd->prepare($sql);
        $query->execute(array(
            "username" => $logUser,
            "password" => $passUser
        ));
        $resultat = $query->fetch();
            if (isset($resultat)) {

                $_SESSION["ID"] = $resultat["id"];
                $_SESSION["USER"] = $resultat["user"];
                $_SESSION["PASS"] = $resultat["pass"];

            }

if ($_SESSION["USER"]!=$logUser){

    if (isset($_POST['insc'])) {
       $sql = "INSERT INTO utilisateur(id,user,pass) VALUES(NULL,?,?)";
       $query = $bd->prepare($sql);
       $query->execute(array(
           $logUser, $passUser
       ));

       $sql = 'SELECT * FROM utilisateur WHERE user  = :username AND pass= :password';
       $query = $bd->prepare($sql);
       $query->execute(array(
           "username" => $logUser,
           "password" => $passUser
       ));
       $resultat = $query->fetch();
       if (isset($resultat)) {

           $_SESSION["ID"] = $resultat["id"];
           $_SESSION["USER"] = $resultat["user"];
           $_SESSION["PASS"] = $resultat["pass"];

       }
   }else{
       $redir = "<script language= 'javascript'>document.location=('index.php?unknwo=0')</script>;";
       echo $redir;
   }


}
    $redir = "<script language= 'javascript'>document.location=('index.php')</script>;";
    echo $redir;

}
else if (isset($_SESSION["ID"])) {
    echo'allready log';
    ?>
    <a href="index.php">Accueil</a>
    <?
}
else{
    ?>
    :<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>plateforme</title>
    <style>
        body {
            background-image: url("Image.projet/Casting-VOA-By-Studios-VOA.png");
            background-color: #DAF7A6;
            color:black ;
            padding-top: 80px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
    <form action="" method="post">
        <label for="user"> nom d'utilisateur</label>
        <input type="text" name="user">
          <br>
        <label for="pass">mot de passe</label>
        <input type="password" name="pass">
        <br>
        <button type="submit" name="insc">Inscription</button>
    </form>
  </div>
</div>
</div>
</body>
</html>
    <?php
}

