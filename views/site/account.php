<h2>Здравствуйте, <?=app()->auth::user()->FIO ?></h2>

<h3>Ваши книги</h3>

<h4>Название</h4>
<h4>Дата выдачи</h4>
<h4>Дата сдачи</h4>
<h4>Сдал</h4>

<a href="<?=app()->route->getUrl('/logout') ?>">Выйти</a>