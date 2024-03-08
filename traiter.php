<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        var_dump($_GET);
      if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])  )
      {
        if(!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['age']) )
        {
            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            $age = $_GET['age'];
            echo "Nom : $nom <br>";
        echo "Prenom : $prenom <br>";
        echo "Age : $age <br>";
        }
        else{
          echo "Tous les champs sont obligatoires";
        }

        
      }
      else{
        echo "Aucune information recue : <a href='index.php'> aller au formulaire</a>";
      }
    ?>
</body>
</html>