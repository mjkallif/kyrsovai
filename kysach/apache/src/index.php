<?php
require 'connenct.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello world page</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <nav>
        <img src="./img/pngegg.png">
        <div>
            <p>Асартимент</p>
            <duv class="menu">
                <button onclick="sortHimself()" id="sortHimself()" >худи</button>
                <button onclick="sortHats()" id="sortHats()">шляпы</button>
                <button onclick="sortJoggers()" id="sortJoggers()">джогеры</button>
                <button onclick="sortAll()" id="sortAll()">все товары</button>
            </duv>
        </div>
    </nav>
    <main>
        <div>
            <div class="post">
                <img src="http://pngimg.com/uploads/hoodie/hoodie_PNG46.png">
                <div>
                    <h1>Название</h1>
                    <p>Описание</p>
                    <p>Производитель</p>
                </div>
            </div>
            <?php
            $mysqli = new mysqli("db", "root", "tilt", "magazin");
            $result = $mysqli->query("SELECT * FROM Hats");
            foreach ($result as $row)
                echo"<div class='post postHats' style='display: flex;'>
                <img src='{$row['img']}'>
                <div>
                    <h1>{$row['manufacturer']}</h1>
                    <p>{$row['info_hats']}</p>
                </div>
                </div>"
            ?>
            <?php
            $mysqli = new mysqli("db", "root", "tilt", "magazin");
            $result = $mysqli->query("SELECT * FROM Himself");
            foreach ($result as $row)
                echo"<div class='post postHimself' style='display: flex;'>
                <img src='{$row['img']}'>
                <div>
                    <h1>{$row['manufacturer']}</h1>
                    <p>{$row['info_himself']}</p>
                </div>
                </div>"
            ?>
            <?php
            $mysqli = new mysqli("db", "root", "tilt", "magazin");
            $result = $mysqli->query("SELECT * FROM Joggers");
            foreach ($result as $row)
                echo"<div class='post postJoggers style='display: flex;'>
                <img src='{$row['img']}'>
                <div>
                    <h1>{$row['manufacturer']}</h1>
                    <p>{$row['info_joggers']}</p>
                </div>
                </div>"
            ?>
        </div>
        <script src="./fun.js"></script>
    </main>
</body>
</html>