<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="img/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            veuiller remplir tous les champs !
        </p>
        <form action="" method="POST">
            <label> Nom</label>
            <input type="text" name="nom">
            <label> Prenom</label>
            <input type="text" name="prenom">
            <label> age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>


    </div>
    
</body>
</html>