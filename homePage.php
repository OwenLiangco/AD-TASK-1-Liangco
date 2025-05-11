<?php

$title = "Top 5 Retro Games I Love";
$author = "Owen Kyle G. Liangco";
$intro = "Welcome~! to my mini showcase of my top 5 retro games that shaped my childhood and love for gaming!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? = $title ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1><? = $title ?></h1>
    <p class = "intro">
        <? = $intro ?>
    </p>
    <p class = "author">
        Created by: <? = $author?>
    </p>
    <a class = "button" href = "./page/reviewPage.php"> 🎮 View My Top 5 Games</a>
</body>
</html>