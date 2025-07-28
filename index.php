<?php
include 'planets.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Planets of the Universe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Planets of the Solar System in the world</h1>
    <div class="container">
        <?php foreach ($planets as $planet): ?>
            <div class="planet-card">
                <h2><?= $planet['name'] ?></h2>
                <p><strong>Distance from Sun:</strong> <?= $planet['distance_from_sun'] ?> million km</p>
                <p><strong>Diameter:</strong> <?= $planet['diameter'] ?> km</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

