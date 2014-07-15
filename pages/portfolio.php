<?
include(__DIR__ . '/../data/portfolio.php');

$portfolio_item_id = (isset($_GET['portfolio_id']) ? $_GET['portfolio_id'] : null);

$portfolio_item = (
    $portfolio_item_id
        ? current(
            array_filter(
                $portfolio_items,
                function($portfolio_item) use ($portfolio_item_id) {
                    return $portfolio_item['id'] == $portfolio_item_id;
                }
            )
        )
        : null
);

?>
<? if($portfolio_item): ?>
    <h1>
        <?= $portfolio_item['title'] ?>
    </h1>
    <div id="portfolio-item">
        <div class="item main clearfix">
            <div class="pull-left" style="width: 620px;">
                <div class="portfolio-item-content scroll-pane">
                    <p>
                        <?= nl2br($portfolio_item['content']); ?>                                     
                    </p>
                </div>
            </div>
            <div style="height: 100%; width: 300px; position: absolute; right: 0; top: 0;">
                <a href="<?= $portfolio_item['image_url'] ?>" style="background-image: url(<?= $portfolio_item['image_url'] ?>)" class="portfolio-item-image fancybox" rel="portfolio-item-gallery">
                    <img src="<?= $portfolio_item['thumb_image_url'] ?>">
                    <span class="zoom"></span>
                </a>
            </div>
        </div>
        <? if($portfolio_item['images']): ?>
            <? $i = 0; foreach($portfolio_item['images'] as $portfolio_item_image): ?>
            <div class="item image <?= ($i+1)%3 == 0 ? 'last-in-row' : '' ?>">
                <a href="<?= $portfolio_item_image['url'] ?>" class="fancybox" rel="portfolio-item-gallery">
                    <img src="<?= $portfolio_item_image['thumb_url'] ?>">
                    <span class="zoom"></span>
                </a>
            </div>
            <? $i++; endforeach; ?>
        <? endif; ?>
    </div>
<? else: ?>
<h1>
    <?= $portfolio_title ?>
</h1>
<p>
    <?= nl2br($portfolio_content); ?>
</p>
<div>
    <ul class="portfolio-list clearfix">
        <? foreach($portfolio_items as $portfolio_item): ?>
            <li class="portfolio-list-item">
                <div class="portfolio-item-container clickable-block">
                    <img src="<?= $portfolio_item['thumb_image_url'] ?> " class="portfolio-image">
                    <span class="zoom"></span>
                    <a href="<?= $portfolio_item['url'] ?>" class="portfolio-title clickable-block-link">
                        <?= $portfolio_item['title'] ?>
                    </a>
                </div>
            </li>
        <? endforeach; ?>
    </ul>
</div>
<? endif ?>