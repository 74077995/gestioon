<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des employes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="img/plus.png" > Ajouter</a>
       
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>ville</th>
                <th>formation</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            <?php
        //inclure la page de connexion
        include_once "connexion.php";
        //requete pour afficher la liste des employer
        $req = mysqli_query($con, "SELECT * FROM employer");
        if(mysqli_num_rows($req) == 0){
            //s'il n'existe pas d'employe dans la base de donne , alors on affiche ce message :
            echo "Il n'y a pas encors d'employe ajouter !";
        }else {
            //si non , affichons la liste de tous les employes
            while($row=mysqli_fetch_assoc($req)){
                ?>
                <tr> 
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td> 
                    <td><?=$row['age']?></td>
                    <td><?=$row['ville']?></td>
                    <td><?=$row['formation']?></td>
                    <td> <a href="modifier.php?id=<?=$row['id']?>"><img src="img/pen.png"></a></td>
                    <td> <a href="supprimer.php?id=<?=$row['id']?>"><img src="img/trash.png"></a></td>
                </tr>
                








                <?php
            }
        }
        ?>
            
            
        </table>


        
    </div>
    
</body>
</html>