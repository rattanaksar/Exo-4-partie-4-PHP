<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 : Les boucles</title>
</head>
<body>
    <h1>Exo 4 : Les boucles</h1>
    <h2>Exo 4</h2>
    <p>
    Créer une variable et l'initialiser à 1.  
    Tant que cette variable n'atteint pas 10, il faut :
        - l'afficher
        - l'incrementer de la moitié de sa valeur
    </p>
    <p>
        <?php
        for($i = 1; $i < 10; $i += $i/2)
        {
          echo $i."<br>";
        }
        ?>
    </p>
</body>
</html>