<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom_utilisateur">Saisir le nom:</label>
        <input type="text" name="nom_utilisateur">
        <label for="prenom_utilisateur">Saisir le prénom:</label>
        <input type="text" name="prenom_utilisateur">
        <label for="mail_utilisateur">Saisir le mail:</label>
        <input type="text" name="mail_utilisateur">
        <label for="password_utilisateur">Saisir le mot de passe:</label>
        <input type="password" name="password_utilisateur">
        <label for="repeat_password_utilisateur">Saisir le mot de passe:</label>
        <input type="password" name="repeat_password_utilisateur">
        <input type="submit" name="submit" value="Ajouter">
        <div><?=$error?></div>
    </form>
    
</body>
</html>