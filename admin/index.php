<?php require_once('app/login.php'); require_once('app/fonctions.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/app.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form-block">
        <br>
            <h1>Connexion</h1>

            <?php if (isset($alert)){echo alertMessage($alert);} ?>
                <form method="POST "action=""><br><br>
                    <input type="text" name="username"  placeholder="Nom d'utilisateur" class="form form-control">
                    <br><br>
                    <input type="password" name="password"  placeholder="Mot de passe" class="form form-control">
                    <br><br><br>
                    <input type="submit" name="submit" value="Connexion" class="btn btn-primary btn-block">
                </form>

    </div>
</body>
</html>