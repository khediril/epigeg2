<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mon formulaire</h1>
    <form action="traiter.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id=""><br>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id=""><br>
        <label for="age">Age:</label>
        <input type="text" name="age" id=""><br>
        <label for="cars">Choose a car:</label>

        <select name="cars[]" id="cars" multiple>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>