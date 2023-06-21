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
    <?php
    //verifier que le bouton ajouter a bien ete clique
    if(isset($_POST['button'])){
        //extraction des informations envoye dans des variables par lamethode post
        extract($_POST);
        //verifier que tous les champs ont ete remplis
        if(isset($nom )&& isset($prenom) && isset($age) && isset($formation) && isset($ville)){
            //connexion a la base de donnee
            include_once "connexion.php";
            //requete d'ajout
            $req = mysqli_query($con , "INSERT INTO `employer` (`id`, `nom`, `prenom`, `age`, `ville`, `formation` ) VALUES (NULL, '$nom', '$prenom', '$age', '$formation', '$ville');");
            if($req){// si la requete a ete effectuee avec succes , on fait une redirection
                header("location: index.php");
            }else{ // si non
                $message = "employe non ajoute";
            }

        }else{
            //si non
            $message = "veuillez remplir tous les champs !";
        }

    } 
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="img/back.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            <?php
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo "message";
            }
            ?>
        </p>
        <form action="" method="POST">
            <label> Nom</label>
            <input type="text" name="nom">
            <label> Prenom</label>
            <input type="text" name="prenom">
            <label> age</label>
            <input type="number" name="age">
            <label> ville d'origine</label>
            <input type="text" name="formation">
            <label> formation</label>
            <input type="text" name="ville">
            <input type="submit" value="Ajouter" name="button">
        </form>


    </div>
    
</body>
</html>