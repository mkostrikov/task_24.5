<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>About</title>
</head>
<body class="wrapper">
    <header class="header">
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="/" class="nav__a">На главную</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <p>Компания создана в <?= $yearOfFoundation ?> году профессионалами, <br>
            работавшими ранее в ведущих грузовых и пассажирских авиакомпаниях.</p>
        <div class="container">
            <div class="block">
                <div class="block__num"><?= $years ?></div>
                <div class="block__text">Лет на рынке</div>
            </div>
            <div class="block">
                <div class="block__num"><?= $flights ?></div>
                <div class="block__text">Выполненых чартерных рейсов</div>
            </div>
            <div class="block">
                <div class="block__num"><?= $support ?></div>
                <div class="block__text">Оперативная поддержка</div>
            </div>
            <div class="block">
                <div class="block__num"><?= $aircrafts ?></div>
                <div class="block__text">Воздушных судов по всему миру</div>
            </div>
        </div>
    </main>

    <section class="info">
        <div class="logo"><?= $logo ?></div>
        <div class="contacts">
            <ul class="contacts__ul">
                <?php
                foreach ($contacts as $contact)
                {
                    echo '<li class="contacts__li">' . $contact . '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="fake"></div>
    </section>
</body>
</html>