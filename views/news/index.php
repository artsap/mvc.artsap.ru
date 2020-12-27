<?php include ROOT . '/views/layouts/header.php';

/**
 * @var array $newsList
 */

?><h1>Новости</h1>
    <div id="newsList">
        <? foreach ($newsList as $item): ?>
            <div class="newsItem">
                <h2>
                    <a href="/news/<?= $item['id']; ?>">
                        <?= $item['title']; ?>
                    </a>
                </h2>
                <div class="date">
                    <?= $item['date']; ?>
                </div>
                <? if ($item['short_content']): ?>
                    <div class="text">
                        <?= $item['short_content']; ?>
                    </div>
                <? endif; ?>
                <a href="/news/<?= $item['id']; ?>" title="<?= $item['title']; ?>">Далее...</a>
            </div>
        <? endforeach; ?>
    </div>
<?php include ROOT . '/views/layouts/footer.php'; ?>