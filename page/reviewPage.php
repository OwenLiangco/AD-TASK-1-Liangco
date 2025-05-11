<?php
$games = [
    ["title" => "Mother 3", "year" => 2005, "console" => "GBA", "image" => "./assets/img/motherThree.jpg", "review" => "An emotional and unforgettable RPG experience with deep storytelling. I played this game during the pandemic and I fell in love with the world-building and the rich story-telling, I highly recommend this if you want an amazing RPG experience."],
    ["title" => "The Legend of Zelda: The Minish Cap", "year" => 2004, "console" => "GBA", "image" => "./assets/img/LOZminishCap.jpg", "review" => "A charming and creative entry in the Zelda series with great mechanics. The first Zelda game I played and what hooked me in the series! I love the puzzles of the dungeons and each gimmick."],
    ["title" => "Advance Wars", "year" => 2001, "console" => "GBA", "image" => "./assets/img/AdvanceWars.jpg", "review" => "A brilliant strategy game with addictive, tactical gameplay. This is the first game that introduced Me to tactical games, haven't played it in awhile; but I still hold it with high regards cause of the strategy."],
    ["title" => "Kirby & The Amazing Mirror", "year" => 2004, "console" => "GBA", "image" => "./assets/img/KatAM.jpg", "review" => "A unique Metroidvania-style Kirby game packed with exploration. I LOVE THIS GAME TO MY VERY SOUL- This was my very first exposure to the Kirby series! The way you can branch out into different zones and fight bosses which ever order you want to start first. Its exploration gimmick is where the game shines for Me, it may be hard at first but as soon as you know each way, it will feel easy to maneuver."],
    ["title" => "Pokémon Emerald", "year" => 2004, "console" => "GBA", "image" => "./assets/img/PokemonEmeraldBox.jpg", "review" => "A fan-favorite game with epic post-game content. This was my very first Pokémon game, the region, the soundtrack, the pokémon, and everything! Pokémon Emerald will be my forever go-to Pokémon game and would highly recommend to others."]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro Games List</title>
    <link rel= "stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>My Top 5 Retro Games</h1>
    <div class = "game-list">
        <?php
        for ($i = 0; $i < count($games); $i++) {
            $game = $games[$i];
            echo "<div class='game-card'>";
            echo "<img src='" . $game['image'] . "' alt='" . $game['title'] . "'>";
            echo "<h2>" . $game['title'] . "</h2>";
            echo "<p><strong>Console:</strong> " . $game['console'] . "</p>";
            echo "<p><strong>Released:</strong> " . $game['year'] . "</p>";

            if ($game['year'] < 2000) {
                echo "<p class= 'tag classic'>🕹️ Classic!</p>";
            } else {
                echo "<p class= 'tag modern'>🧃 Modern Retro!</p>";
            }

            echo "</div>";
        }
        ?>
    </div>
    <a class= "button" href= "/homePage.php">← Back to Home</a>

    <div id= "gameModal" class= "modal hidden">
        <div class= "modal-content">
            <span class= "close-buttton" onclick= "closemodal()"></span>
            <img id = "modalImage" src= "" alt= "Game Cover" style = "max-width: 100%">
            <h2 id = "modalTitle"></h2>
            <p id = "modalConsole"></p>
            <p id = "modalRelease"></p>
            <p id = "modalReview"></p>
        </div>
    </div>

    <script id="gameData" type="application/json"><?= json_encode($games, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <script src= "./assets/js/script.js"></script>
</body>
</html>