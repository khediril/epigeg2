<html>

<head>
    <title>Exercice 1</title>
    <?php
       function valider()
       {
        $errs = [];
        if (empty($_GET["nom"])) {
            $errs[] = "Le nom doit etre non vide<br>";
        }
        if (empty($_GET['note'])) {
            $errs[] = "La note doit etre non vide<br>";
        }
        else
        {
            if (intval($_GET['note']) < 0 || intval($_GET['note']) > 20) {
                $errs[] = "La note doit etre entre 0 et 20 <br>";
            }
        }
        return $errs;
       }
    ?> 
</head>

<body>
    <?php
    if (isset($_GET["submit"])) {
        
        $errs  = valider();

        if (count($errs) > 0) {
            foreach ($errs as $msg)
                echo $msg;
        ?>
        <form action="" method="GET" name="form">
            <br>Nom : <input type="text" name="nom" value="<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>" >
            <br>Note : <input type="text" name="note" value="<?php if(isset($_GET['note'])) echo $_GET['note']; ?>" >
            <br> <input type="submit" name="submit" value="Envoyer">
        </form>

        <?php
        } 
        else 
        {
            $nom = $_GET["nom"];
            $heure = date("H");
            $note = $_GET['note'];
            if ($heure >= 18)
                $message = "Bonsoir $nom, <br />";
            else
                $message = "Bonjour $nom,<br />";
            echo $message." votre votre note est $note";
        }
    } 
    else
     {
    ?>
        <form action="" method="GET" name="form">
            <br>Nom : <input type="text" name="nom" value="<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>" >
            <br>Note : <input type="text" name="note" value="<?php if(isset($_GET['note'])) echo $_GET['note']; ?>" >
            <br> <input type="submit" name="submit" value="Envoyer">
        </form>
    <?php
    }
    ?>
   
</body>

</html>