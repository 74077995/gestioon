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
        //connexion a la base de donnee
        include_once "connexion.php";
        //on recupere le id dans le lien
        $id = $_GET['id'];
     //requete pour afficher les infos d'un employer
     $req = mysqli_query($con , "SELECT * FROM `employer` WHERE id = $id");
     $row = mysqli_fetch_assoc($req);

    //verifier que le bouton ajouter a bien ete clique
    if(isset($_POST['button'])){
        //extraction des informations envoye dans des variables par la methode post
        extract($_POST);
        //verifier que tous les champs ont ete remplis
        if(isset($nom) && isset($prenom) && isset($age) && isset($formation) && isset($ville)){
            //requete de modification
             $req = mysqli_query($con, "UPDATE employer SET nom = '$nom' , prenom = '$prenom' , age = '$age' , formation = '$formation' , ville = '$ville' WHERE id = $id");
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

        <form action="" method="POST">
            <label> Nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label> Prenom</label>
            <input type="text" name="prenom" value="<?=$row['prenom']?>">
            <label> age</label>
            <input type="number" name="age" value="<?=$row['age']?>">
            <label> formation</label>
            <input type="text" name="formation" value="<?=$row['formation']?>">
            <label> ville</label>
            <input type="text" name="ville" value="<?=$row['ville']?>">
            <input type="submit" value="Modifier" name="button">
        </form>


    </div>
    
</body>
</html>