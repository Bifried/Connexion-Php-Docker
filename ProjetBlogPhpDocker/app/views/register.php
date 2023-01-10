<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);

        body {
            background-color: lightcyan;
        }
        form a {
            color:orange;
        }
        #login-form {
            width: 280px;
            margin: 0 auto;
            background-color: #fcfcfc;
            padding: 20px 50px 40px;
            box-shadow: 1px 4px 10px 1px #aaa;
            font-family: 'Raleway', Arial, sans-serif;
        }

        #login-form * {
            box-sizing: border-box;
        }

        #login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-family: 'Raleway', Arial, sans-serif;
        }

        #login-form input {
            margin-bottom: 15px;
            font-family: 'Raleway', Arial, sans-serif;
        }

        #login-form input[type=text], #login-form input[type=email], #login-form input[type=password] {
            display: block;
            height: 32px;
            padding: 6px 16px;
            width: 100%;
            border: none;
            font-family: 'Raleway', Arial, sans-serif;
            background-color: #f3f3f3;
        }


        #login-form label {
            color: #777;
            font-size: 0.8em;
            text-transform: uppercase;
            font-family: 'Raleway', Arial, sans-serif;
        }

        #login-form input[type=checkbox] {
            float: left;
        }

        #login-form input:not(:checked) + #feedback-phone {
            height: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        #login-form #feedback-phone {
            transition: .3s;
        }

        #login-form button[type=submit] {
            text-transform: uppercase;
            font-family: 'Raleway', Arial, sans-serif;
            display: block;
            margin: 20px auto 0;
            width: 150px;
            height: 40px;
            border-radius: 25px;
            border: none;
            color: #eee;
            font-weight: 700;
            box-shadow: 1px 4px 10px 1px #aaa;

            background: #207cca; /* Old browsers */
            background: -moz-linear-gradient(left, #207cca 0%, #9f58a3 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #207cca 0%, #9f58a3 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #207cca 0%, #9f58a3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#207cca', endColorstr='#9f58a3', GradientType=1); /* IE6-9 */
        }
    </style>
</head>
<body>
<button><a href="/"> Home </a></button>

<div id="login-form">
    <h2 class="header">Création de compte</h2>
    <div>
        <form method="POST" action="/register-new-user">
            <label for="username"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" id="username" name="username" required>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrer un email" id="email" name="email" required>
            <br>
            <label for="firstname"><b>Prénom</b></label>
            <input type="text" placeholder="Prénom" id="firstname" name="firstname" required>
            <label for="lastname"><b>Nom</b></label>
            <input type="text" placeholder="Nom" id="lastname" name="lastname" required>
            <label for="password"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" id="password" name="password" required>
            <br>

            <br>

            <input type="submit" id='submit' value='Créer le compte'>
            <br>
            <a href="/login">Vous avez déjà un compte ? Connectez-vous</a>
        </form>
    </div>
</div>
</body>
<br>
</html>