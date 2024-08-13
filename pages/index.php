<?php
session_start(); // Démmarre une nouvelle session ou reprendre une session existante
require_once '../config.php';
require_once '../inc/header.php';

//recuperer les articles de la base de données
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) {
    $escaped_title = htmlspecialchars($row['title']); //htmlspecialchars :: protéger de XSS
    $list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LOLO blog</title>
</head>

<body>

    <div class="container">
        <div class="">
            <div>
                <h1>Bienvenue sur Lolo Blog</h1>
                <ol>

                </ol>
                <a href=""></a>

                <h2>title</h2>
            </div>
        </div>
    </div>
</body>

</html>