<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
    </nav>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= app()->route->getUrl('/hello') ?>">Информация</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <?php
            if (!app()->auth::check()):
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= app()->route->getUrl('/login') ?>">Авторизация</a>
            </li>
            <?php

            else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= app()->route->getUrl('/recording') ?>">Запись к врачу</a>
            </li>
            <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="<?= app()->route->getUrl('/ReceptionHistory') ?>">История Приемов</a>
                </li>
                <a class="nav-link" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            </li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Поиск
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="nav-link text-dark" href="<?= app()->route->getUrl('/DiagnosisByPatient') ?>">Выбор диагноза по пациентам</a>
                        <li><a class="nav-link text-dark" href="<?= app()->route->getUrl('/PatientToDoctor') ?>">Выбрать пациента к врачу</a></li>
                        <li><a class="nav-link text-dark" href="<?= app()->route->getUrl('/DoctorChoice') ?>">Выбор врача</a></li>
                    </ul>
                </div>
            <?php
            endif;
            ?>
        </ul>
    </div>
</nav>
<main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?= $content ?? '' ?>
</main>

</body>
</html>
