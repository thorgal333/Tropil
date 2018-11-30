<?php
 include "../business/salarie.php";
    if (!filter_has_var(INPUT_POST, 'nom' ) || !filter_has_var(INPUT_POST, 'prenom' )
    || filter_input(INPUT_POST, 'salaire', FILTER_VALIDATE_INT) === false)
    {
        header('Location: saisieSalarie.php?erreur=true');
        exit();
    }
    $nom =  filter_var($_POST['nom'], FILTER_SANITIZE_STRING); 
    $prenom =  filter_var($_POST['prenom'], FILTER_SANITIZE_STRING); 
    $salaire = filter_var($_POST['salaire'], FILTER_SANITIZE_NUMBER_INT); 

    $salarie = new business\salarie($nom, $prenom, $salaire);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage Salarie</title>
    <style>
    table{
        border-spacing: 0px;
    }
    td{
        border: 3px solid blue;
        padding: 6px;
        margin : 0px;
    }
    </style>
</head>
<body>
    <h1>Information sur le prestataire</h1>
    <table>

    <tr><td>Nom</td><td> <?php echo $salarie->getNom() ?></td></tr>
    <tr><td>Prénom</td><td> <?php echo $salarie->getPrenom() ?></td></tr>
    <tr><td>Salaire brut</td><td><b> <?php echo $salarie->getSalaire()?></b></td></tr>
    <tr><td>Retraite</td><td> <?php echo $salarie->calculRetraite() ?></td></tr>
    <tr><td>CSG</td><td> <?php echo $salarie->calculCSG() ?></td></tr>
    <tr><td>Santé </td><td> <?php echo $salarie->calculSante() ?></td></tr>
    <tr><td>Mutuelle </td><td> <?php echo $salarie->calculMutuelle() ?></td></tr>
    <tr><td>Salaire Net</td><td><b> <?php echo $salarie->calculSalaireNet() ?><b></td></tr>
    </table>
</body>
</html>




