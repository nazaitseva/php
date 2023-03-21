<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Лабораторная 1</title>
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <a href="https://mospolytech.ru/" class="header__link"><img src="mospolytech.png" alt="university" class="header__logo"></a>
            <h1 class="header__heading">Hello, World!</h1>
            <a href="https://github.com/nazaitseva/php.git" class="header__link"><img src="github.png" alt="github" class="header__github"></a>
        </div>
    </header>
    <main>
     <table>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Группа</th>
        </tr>
        <?php
        for ($i = 1; $i < 6; $i++) {
            echo "<tr>
            <th>".$i."</th>
            <td>Наталья</td>
            <td>Зайцева</td>
            <td>221-322</td>
            </tr>";
        }
        ?>
     </table>
        <div class="img_arr">
        <?php
            $images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg");
            for ($i = 0; $i < 5; $i++) {
            echo "<img src=\"$images[$i]\" width=\"200px\">
            ";
            }
        ?>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <p class="footer__text">Разработано Зайцевой Натальей Александровной, Московский Политех, группа 221-322, 2023 год</p>
        </div>
    </footer>
</body>
</html>