<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //var_dump($_POST);
      if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])  )
      {
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) )
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
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