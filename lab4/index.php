<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Лабораторная 4</title>
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <a href="https://mospolytech.ru/" class="header__link"><img src="img/mospolytech.png" alt="university" class="header__logo"></a>
            <a href="https://github.com/nazaitseva/php.git" class="header__link"><img src="img/github.png" alt="github" class="header__github"></a>
        </div>
    </header>
    <main>
        <section class="equation">
            <div class="equation__wrapper">
                <h1 class="equation__heading">Домашняя работа: Solve the equation</h1>
                <p class="equation__text">Введите уравнение в виде a/x=b</p>
                <form action="" method="post" class="equation__form">
                    <input type="text" name="equation" placeholder="a/x=b" pattern="^[0-9x+\-*=/]+$" class="equation__input">
                    <button type="submit" class="equation__button">Решение</button>
                </form>
                <p class="equation__answer">Ответ:
                    <?php
                        if (!empty($_POST)) {
                            $inputStr = $_POST['equation'];
                            $inputStr = str_replace(' ', '', $inputStr);
                        if (strpos($inputStr, '=') !== false) {
                            $parts = explode("=", $inputStr);
                            $leftPart = $parts[0]; 
                            $leftNumber = intval($leftPart); 
                            $rightPart = $parts[1];
                            $rightNumber = intval($rightPart);
                            $left = preg_split('/(\d+)([\+\-\*\/])([x])/i', $leftPart, -1, PREG_SPLIT_DELIM_CAPTURE);
                            $operator = $left[2];
                            if ($operator == "+"){
                                $x = $rightNumber - $leftNumber;
                            }
                            elseif ($operator == "-"){
                                $x = $leftNumber - $rightNumber;
                            }
                            elseif ($operator == "/"){
                                $x = $leftNumber / $rightNumber;
                            }
                            elseif ($operator == "*"){
                                $x = $rightNumber/$leftNumber;
                            }
                            echo "x = " . $x . ', при ' . $inputStr;
                            }
                        }
                    ?>
                </p>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <p class="footer__text">Разработано Зайцевой Натальей Александровной, Московский Политех, группа 221-322, 2023 год</p>
        </div>
    </footer>
</body>
</html>