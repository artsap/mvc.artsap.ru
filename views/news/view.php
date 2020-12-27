<?php include ROOT . '/views/layouts/header.php';

/**
 * @var array $newsItem
 */

?>
    <h1><?= $newsItem['title']; ?></h1>
    <div class="date"><?= $newsItem['date']; ?></div>
    <div class="text"><?= $newsItem['short_content']; ?></div>
    <a href="/news">Список новости</a>
    </div>
<?php include ROOT . '/views/layouts/footer.php'; ?>