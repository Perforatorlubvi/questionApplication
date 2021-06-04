<?= $this->extend('Layouts/default') ?>
<?= $this->section('title') ?>
Страница добавления коментария
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item">
                <a>Страница добавления отзыва</a>
            </li>
        </ol>
    </nav>
<form action="<?= base_url('/feedback') ?>" method="post" style="display: flex;flex-direction: column;padding: 50px;
  background: #ccc;"> <!--Создаем форму-->
    <input type="text" placeholder="Автор" name="author" value="<?= old('author')?>"/><!--Создаем строку для ввода имени-->
    <input type="text" placeholder="Заголовок" name="title" value="<?= old('title')?>"/>
    <input type="email" placeholder="E-mail" name="email" value="<?= old('email')?>"/>
    <!--Создаем строку для ввода e-mail (пригодится для ответа)-->
    <textarea placeholder="Отзыв" name="content" rows="10" cols="45" ><?= old('content')?></textarea><!--Поле для ввода сообщения-->
    <input type="submit" value="Отправить"/><!--Кнопка отправить-->
    <?php if (session()->has('errors')) : ?>
        <?php foreach (session('errors') as $error) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</form>
<?= $this->endSection() ?>