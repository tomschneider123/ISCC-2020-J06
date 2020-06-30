<html>
<?php
include 'C:\Users\tomsc\Desktop\TRAVAIL\ISEG\ISSC-2020\ISCC-2020-J06\EX_01\affichage.php';
include 'C:\Users\tomsc\Desktop\TRAVAIL\ISEG\ISSC-2020\ISCC-2020-J06\EX_01\gestion-produit.php';
?>

<head>
    <title> T-shirt </title>
</head>

<body>
<?php

$nom_produit = 'T-shirt femme';
echo $nom_produit;
$couleur = 'rouge';
echo $couleur;
$prix = 15.50;
echo $prix;
$disponible = 'true';
echo $disponible;
$quantite = 10;
echo $quantite;


afficher_titre ($nom_produit);
afficher_description ($couleur, $prix);
afficher_produit ($nom_produit, $couleur, $prix, $disponible);
update_dispo ($quantite);
restockage ($quantite, $nbajout);
achat ($quantite, $nbachat);

echo "Le nom du produit est $nom_produit";
echo "la couleur du produit est $couleur";
?>
</html>