<?= $this->extend('Layouts/default') ?>
<?= $this->section('title') ?>
Главная страница
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end">
        <li class="breadcrumb-item">
            <a>Главная</a>
        </li>
    </ol>
</nav>
<?php if (!empty($items)): ?>
    <?php foreach ($items as $tableRow): ?>
                    <div style="border:#C0C0C0 2px solid;background-color: #FFFAF0;">
                        <div style="display: flex;color: #b4b4b4;">
                            <p><?=$tableRow['author']?></p>,
                            <?= date("m.d.y", strtotime($tableRow['date_publish'])) ?>
                        </div>
                        <div >
                            <p><b><?=$tableRow['title']?></b></p>
                            <p><?= $tableRow['content'] ?></p>
                        </div>
                    </div>
    <?php endforeach; ?>
<?php else: ?>
            <div style="height: 300px;background-color: white">
                <div>
                    <b>Упс.. Здесь пока нет отзывов</b>
                </div>
            </div>
    <?php endif; ?>
    <?= $this->endSection() ?>





















