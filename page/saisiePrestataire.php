
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saisie prestataire</title>
    <style>
        .champ{
            margin: 10px 0px;
        }
    </style>
</head>
<body>
    <h1>Saisie des informations du prestataire</h1>
    <?php if (filter_input(INPUT_GET, 'erreur'))
    {
      echo 'Erreur dans le traitement du formulaire';
    }
    ?>
    <form method="POST" action="affichagePrestataire.php">
        <div class="champ"><input type="text" name=nom placeholder="Nom" required></div>
        <div class="champ"><input type="text" name="prenom" placeHolder="Prénom" required></div>
        <div class="champ"><input type="number" name="nbHeure" placeHolder="Nombre d'heures" required></div>
        <div class="champ"><input type="number" name="tarif" placeHolder="Tarif" required></div>
        <div class="champ"><input type="submit" name="bouton" value="OK" ></div>
       
    </form>
</body>
</html>