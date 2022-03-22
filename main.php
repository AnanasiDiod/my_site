<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя первая веб-страница</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>
        <div class="about_me">
            <h1><?php echo $p ?></h1>
            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="img/yoj.jpg" width="380" height="280" alt="yojik">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                        <?php
                        echo $name, ' ', $surname . '<br';
                        echo 'город', ' ', $city;
                        ?>
                    </p>

                    <p>
                        Мне
                        <?php echo $age; ?>
                        лет
                    </p>
                    <p>Мы научились создавать переменные</p>
                    <p>Изучили простые операции с ними</p>
                </div>

            </div>
            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c;
                ?> <br>
                <?php
                echo 'Целочисленная переменная';
                echo '<br>';
                echo $d1;
                echo '<br>';
                echo 'Переменная типа числа с точкой двойной точности';
                echo '<br>';
                echo $d2;
                echo '<br>';
                echo $s1;
                echo '<br>';
                echo $s2;
                echo '<br>';
                ?>
            </div>
            <div class="article">
                <p class="text">
                    Здесь могла быть ваша реклама
                </p>
            </div>
        </div>
    </div>
</body>

</html>