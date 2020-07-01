

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
	<title>Page d'accueil</title>
</head>
<body>
<?php
if (isset(  $_SESSION["ID"])){
?>
<form method="POST" action="traitement.php">
	<label for="link">Entrer l'URL BLOT</label>
<input type="text" name="link">
<button type="submit" name="recup">Envoyer</button>
</form>
    <form action="" method="get">
        <input type="text" hidden name="off">
        <button type="submit">deconnexion</button>
    </form>
<a href="stat.php">Statistique </a> <br>
<a href="index.php">Accueil</a> <br>
<a href="rapport.php">Rapport</a>
<?php
}else {
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
?>

</body>
</html>











