<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="img/break_through.jpeg"  height="500">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                        <?php echo $name, ' ', $surname . '<br>';
                            echo "город ", $city;
                        ?>
                    </p>

                    <p> Мне <?php echo $age; ?> лет.</p>
                    <p> Научился создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
			
                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?>
                <br>
                <?php
                    $a = 10;
                    $b = 20;
                    $c = $a + $b;
                    echo $c;
                ?>   <br>
                <?php echo $d; ?>
				
            </div>

            <div class="article">
                <p class="text">
                    Здесь возможно когда-нибудь будет статья.<br>
                    Хотя вряд ли. Всё таки это не курс "Риторики" или "Журналистики".
                    А написание никому не нужных текстов, мне надоело на работе.
                </p>
                <p align="center"><strong>Так что не обессудьте!</strong></p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>
    </div>

</body>
</html>

