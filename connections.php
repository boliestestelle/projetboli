!<?php


include("connect.php");

if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    $req = $connection->prepare("select * from users where email=? and password=?");
    $req->execute(array($_POST["email"], $_POST["password"]));

    $user = $req->fetch(PDO::FETCH_ASSOC);


    if($user) {
        header("Location: index.php");
    } else {
        $er_msg = "Login ou mot de passe invalide";
    }

} else {
    $er_msg = "saisir les champs";
}



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
            background-color: green;
            color: DAF7A6;
            padding-top: 80px;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <form class="form" role="form" action="connection.php" method="post" enctype="multipart/form-data">
                <h1><strong>se connecter </strong></h1>
                    <?php 
                    //c'est pour afficher $er_msg
                    if(!empty($er_msg)) {
                            echo '<p>'.$er_msg.'</p>';
                    }
                    ?>
                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" type="text" class="form-control"  >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">valider</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>