<?php
$nom = "ait lhaj";
$prenom = "layla";
$filiere = "Informatique";
$age = 20;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <h1>Fiche étudiant</h1>
    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
    </ul>
    <p>Je m'appelle <?php echo "$prenom $nom"; ?>, j'ai <?php echo $age; ?> ans et je suis en filière <?php echo $filiere; ?>.</p>
</body>
</html>