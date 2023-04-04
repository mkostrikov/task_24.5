<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Main</title>
</head>
<body class="wrapper">
    <header class="header">
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="/about" class="nav__a">О компании</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="title"><?= $name ?></h1>

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