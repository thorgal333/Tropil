
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saisie amortissement</title>
    <style>
        .champ{
            margin: 10px 0px;
        }
    </style>
</head>
<body>
    <h1>Saisie des informations du salarié</h1>
    <?php if (filter_input(INPUT_GET, 'erreur'))
    {
      echo 'Erreur dans le traitement du formulaire';
    }
    ?>
    <form method="POST" action="affichageAmortissement.php">
       
        <div class="champ"><input type="number" name="valeur" placeHolder="Valeur de l'outil" required></div>
        <div class="champ"><input type="number" name="nbAnnee" placeHolder="Nombre d'annees" required></div>
        <div class="champ">Amortissement linéaire<input type="radio" name="type" value="lineaire" checked></div>
        <div class="champ">Amortissement dégressif<input type="radio" name="type" value="degressif"></div>
        <div class="champ"><input type="submit" name="bouton" value="OK" ></div>
       
    </form>
</body>
</html>