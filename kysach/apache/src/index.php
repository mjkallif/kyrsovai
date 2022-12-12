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
                <button>худи</button>
                <button>шляпы</button>
                <button>джогеры</button>
                <button>все товары</button>
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
            $result = $mysqli->query("SELECT * FROM Himself");
            foreach ($result as $row)
                echo"<div class='post'>
                <img src='{$row['img']}'>
                <div>
                    <h1>{$row['manufacturer']}</h1>
                    <p>{$row['info_himself']}</p>
                </div>
                </div>"
            
            ?>
        </div>
    </main>
</body>
</html>