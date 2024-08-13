<?php

// connection my sql
// Enregistrement des données de co dans des variables
$serveur = 'localhost';
$user = 'root';
$password = '';
$db = 'net_db'; //la db sur laquelle on va travailler
// Connexion à MySQL
$conn = mysqli_connect($serveur, $user, $password, $db);
// Vérif de la co
if (!$conn) {
    die('La connexion a échoué :' . mysqli_connect_error());
} else {
    echo "Connexion réussie !";
}
// Fermeture de la connexion
