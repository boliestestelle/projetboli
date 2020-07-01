<!--connexion LOGIN-->
<?php
include 'config/connection.php';
if (!empty($_POST)) {
    $logUser = $_POST["user"];
    $passUser = $_POST["pass"];

    if ($logUser != "" && $passUser != "") {

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
    }

}


if (isset($_GET['off'])) {
    session_unset();
    session_destroy();
    $redir = "<script language= 'javascript'>document.location=('index.php')</script>;";
    echo $redir;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Page d'accueil</title>
    <style>
        body {
            background-color: green;
            color: black;
            padding-top: 80px;
        }
        a
        {
color: white;
text-decoration: none;
}

    </style>
</head>
<body>
<input type="text" value="<?= $_SESSION["ID"] ?>" hidden>
<?php
if (isset($_SESSION["ID"])) {
    ?>
    <!--   <input type="text" value="<?/*= $_SESSION["ID"] */ ?>" hidden>
 -->
 <div class="container">
           <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
        <form method="POST" action="traitement.php">
        <label for="link">Entrer l'URL BLOT</label>
        <input type="text" name="link">
        <button type="submit" name="recup">Envoyer</button>
         </form>
         </div>
       </div>
   </div>

     <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
        <form action="" method="get">
        <input type="text" hidden name="off">
        <button type="submit">deconnexion</button>
        </form>
        </div>
     </div>
   </div>
    <a href="stat.php">Statistique </a> <br>
    <a href="index.php">Accueil</a> <br>
    <a href="rapport.php">Rapport</a>
    <?php
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
    <form action="inscription.php" METHOD="post">
        <label for="user">Login</label>
        <input type="text" name="user">
            <br>
        <label for="pass">mot de passe</label>
        <input type="password" name="pass">
        <button type="submit">Connexion</button>
        <br>
        <a href="inscription.php">inscription</a>
    </form>
</div>
</div>
</div>
    <?
}
?>

</body>
</html>











