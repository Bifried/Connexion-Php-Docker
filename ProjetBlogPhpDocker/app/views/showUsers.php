<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page utilisateur connecté</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);

        body {
            font-family: 'Raleway', Arial, sans-serif;
            background-color: lightcyan;
        }
        .welcome {
            font-size: 18px;
        }
        .title {
            font-size: 36px;
            color:orange;
        }
        .content {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="welcome">
<h1>Bienvenue sur <span class="title"><?= $titre; ?> </span></h1>
</div>
<div class="content">
    <?= $content ?>
</div>

<button><a href="/">Déconnexion</a></button> <!-- ça renvoit juste à home-->
</a>
<br>
<br>
<fieldset><!--Formulaire de création de posts à faire-->
    <form method="POST">
        <input type="text" name="comment" id="submit" placeholder="Exprimez vous !"/>
        <input type="submit" value="Envoyer" id="submit"/>
    </form>
    <br>
    <br>
</body>
</html>

