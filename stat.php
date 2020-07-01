<?php
include 'config/connection.php';

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
	<title>Statistique</title>
</head>
<body>
<!--<input type="text" value="<?/*= $_SESSION["ID"] */?>" hidden>
--><?php
if (isset($_SESSION["ID"])) {
?>
<form method="POST" action="trtstat.php">
<select name="option">
	<option>..</option>
	<option value="minpiece">Min/Nbrepiece</option>
	<option value="minsur">Min/surface</option>
	<option value="minquart">Min/Quartier</option>

	<option value="maxpiece">Max/Nbrepiece</option>
	<option value="maxsur">Max/surface</option>
	<option value="maxquart">Max/Quartier</option>

	<option value="moypiece">Moyen/Nbrepiece</option>
	<option value="moysur">Moyen/surface</option>
	<option value="moyquart">Moyen/Quartier</option>
</select><br>
<button name="asc" value="ASC">Croissant</button>
<button name="desc" value="DESC">Decroissant</button>
<button name="var">variation du prix</button>
</form>
    <form action="" method="get">
        <input type="text" hidden name="off">
        <button type="submit">deconnexion</button>
    </form>
    <a href="index.php">Accueil</a><br>
<a href="rapport.php">Rapport</a>
<?php
}
    else {
?>
  <form action="inscription.php" METHOD="post">
    <style>
.bouton {
  background-color: #008000;
  border: none;
  color: white;
  padding: 10px;
  margin: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  cursor: pointer;
}
</style>
    <label for="user">Entre le nom d'utilisateur</label>
    <input type="text" name="user">

    <label for="pass"> Entre le mot de passe</label>
    <input type="text" name="pass">
    <button type="submit">Connexion</button>
      <a href="inscription.php">inscription</a>
</form>
<?
}
?>

</body>
</html>
	