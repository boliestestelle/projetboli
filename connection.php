<?php
session_start();

	//constantes
	//define("HOST","localhost");
	define("HOST","localhost");
	//define("DB","bdProjetestelle");
	define("DB","snmfqqpj_prof");
	//define("USER","root");
	define("USER","snmfqqpj_root");
	//define("PASS","root");
	define("PASS","ponbej-xivwu8-Jyskix");
	define("PORT","");


	 try{
	 	$bd = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DB,USER,PASS);
	 	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$bd->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8");
	 } catch (PDOException $e) {

		echo "Une erreur est survenue lors de la connexion à la base de donnees ! <hr>";
		die('Erreur : ' .  $e->getMessage());
	};


?>