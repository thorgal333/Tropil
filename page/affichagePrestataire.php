<?php
 include "../business/prestataire.php";
    if (!filter_has_var(INPUT_POST, 'nom' ) || !filter_has_var(INPUT_POST, 'prenom' )
    || filter_input(INPUT_POST, 'nbHeure', FILTER_VALIDATE_INT) === false
    || filter_input(INPUT_POST, 'tarif', FILTER_VALIDATE_INT) === false)
    {
        header('Location: saisiePrestataire.php?erreur=true');
        exit();
    }
    $nom =  filter_var($_POST['nom'], FILTER_SANITIZE_STRING); 
    $prenom =  filter_var($_POST['prenom'], FILTER_SANITIZE_STRING); 
    $nbHeure = filter_var($_POST['nbHeure'], FILTER_SANITIZE_NUMBER_INT); 
    $tarif = filter_var($_POST['tarif'], FILTER_SANITIZE_NUMBER_INT);

    $prestataire = new business\Prestataire($nom, $prenom, $nbHeure, $tarif);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage Prestataire</title>
</head>
<body>
    <h1>Information sur le prestataire</h1>
    <div>Nom : <?php echo $prestataire->getNom() ?></div>
    <div>Prénom : <?php echo $prestataire->getPrenom() ?></div>

    <div>Coût TTC : <?php echo $prestataire->CalculCout() ?>
    
</body>
</html>




