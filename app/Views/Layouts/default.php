<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8"/>
    <title><?= env('app.name') ?? 'Codeigniter' ?> - <?= $this->renderSection('title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection('startStyles') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?= $this->renderSection('styles') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Мой  сайт</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/') ?>">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/feedback') ?>">Добавить отзыв</a>
            </li>
        </ul>
    </div>
</nav>
<?= $this->renderSection('content') ?>
<?= $this->renderSection('startScripts') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>