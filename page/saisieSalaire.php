
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saisie salarié</title>
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
    <form method="POST" action="affichageSalarie.php">
        <div class="champ"><input type="text" name=nom placeholder="Nom" required></div>
        <div class="champ"><input type="text" name="prenom" placeHolder="Prénom" required></div>
        <div class="champ"><input type="number" name="salaire" placeHolder="Salaire brut mensuel" required></div>
        <div class="champ"><input type="submit" name="bouton" value="OK" ></div>
       
    </form>
</body>
</html>