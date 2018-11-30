<?php
 include "../business/amortissement.php";
 include "../business/amortissementLineaire.php";
 include "../business/amortissementDegressif.php";

    if (!filter_has_var(INPUT_POST, 'valeur' ) || !filter_has_var(INPUT_POST, 'nbAnnee' )
    || !filter_has_var(INPUT_POST, 'type' ))
    {
        header('Location: saisieAmortissement.php?erreur=true');
        exit();
    }
    $valeur = filter_var($_POST['valeur'], FILTER_SANITIZE_NUMBER_INT); 
    $nbAnnee = filter_var($_POST['nbAnnee'], FILTER_SANITIZE_NUMBER_INT);
    $type = filter_var($_POST['type']);

    $amortissement = $type =='lineaire' ? new business\amortissementLineaire($valeur, $nbAnnee): new business\amortissementDegressif($valeur, $nbAnnee);

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
    <h1>Information sur le montant annuel des amortissement</h1>
    <?php
    $annee = 1;
    foreach($amortissement->CalculAmortissement() as $montant)
    {
    
    echo "<div>";
    echo "année $annee  : ";
    echo $montant;
    echo "</div>";
    $annee++;
    }
    
    ?>
</body>
</html>




