<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Лабораторная 2</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <a href="https://mospolytech.ru/" class="header__link"><img src="img/mospolytech.png" alt="university" class="header__logo"></a>
            <a href="https://github.com/nazaitseva/php.git" class="header__link"><img src="img/github.png" alt="github" class="header__github"></a>
            <h1 class="header__heading">Домашняя работа: Feedback Form</h1>
        </div>
    </header>
    <main class="function">
        <textarea class="function_text" name="" id="" cols="50" rows="30">
            <?php print_r(get_headers('https://www.php.net/')) 
            ?>
        </textarea>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <p class="footer__text">Разработано Зайцевой Натальей Александровной, Московский Политех, группа 221-322, 2023 год</p>
        </div>
    </footer>
</body>
</html>