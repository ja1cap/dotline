<?

$portfolio_item_id = (isset($_GET['portfolio_id']) ? $_GET['portfolio_id'] : null);

$portfolio_items = [
    [
        "id" => 1,
        "url" => "/?page=portfolio-page&portfolio_id=1",
        "image_url" => "/img/portfolio/1.jpg",
        "title" => "Частный дом в пос. Тратата. Площадь 170 м2",
    ],
    [
        "id" => 2,
        "url" => "/?page=portfolio-page&portfolio_id=2",
        "image_url" => "/img/portfolio/2.jpg",
        "title" => "Квартира в г. Минске. Площадь 83 м2",
    ],
    [
        "id" => 3,
        "url" => "/?page=portfolio-page&portfolio_id=3",
        "image_url" => "/img/portfolio/3.jpg",
        "title" => "Частный дом в пос. Тратата. Площадь 170 м2",
    ],
    [
        "id" => 4,
        "url" => "/?page=portfolio-page&portfolio_id=4",
        "image_url" => "/img/portfolio/4.jpg",
        "title" => "Квартира в г. Минске. Площадь 83 м2",
    ],
];

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
                <div style="text-align: justify;">
                    Было принято решение проектировать стационарную кофейню в переходе станции метро Автозаводская, города Минска. Был осуществлён обмер данного перехода и построен план торговых помещений в нём. В процессе обмеров было выбрано существующее помещение магазина косметических товаров «Мила», которое подходило для объекта кофейни. Размеры основного помещения 12.570 х 6000 мм. В отделке помещения были запроектированы материалы, которые создают атмосферу кофейни, как то: деревянные панели, декоративная штукатурка, керамическая плитка на полу и т.д. Потолок в проектируемом помещении многоуровневый, ввиду того, что помещение располагается в переходе, потолок состоит из двух уровней: высотой 2400 мм и 3050 мм в свету. Из-за такого устройства потолка было принято решение не устраивать зашивку и не скрывать вентиляцию. Вентиляция была устроена из спирально-навивных нержавеющих воздуховодов диаметром 200 мм.                 
                </div>
            </div>
            <div style="height: 100%; width: 300px; position: absolute; right: 0; top: 0;">
                <div class="portfolio-item-image" style="background-image: url(<?= $portfolio_item['image_url'] ?>)"></div>
            </div>
        </div>
        <? foreach($portfolio_items as $i => $portfolio_item): ?>
        <div class="item image <?= ($i+1)%3 == 0 ? 'last-in-row' : '' ?>">
            <img src="<?= $portfolio_item['image_url'] ?>">
        </div>
        <? endforeach; ?>
    </div>
    <script>
        $(function(){

//            $('#portfolio-item').isotope({
//                itemSelector: '.item',
//                layoutMode: 'masonry',
//                masonry: {
//                    columnWidth: 313
//                }
//            })

        });
    </script>
<? else: ?>
<h1>
    Портфолио студии Dotline
</h1>
<p>
    В этом разделе вы можете посмотреть примеры проектов как частных интерьеров, так и общественных.
</p>
<div>
    <ul class="portfolio-list clearfix">
        <? foreach($portfolio_items as $portfolio_item): ?>
            <li class="portfolio-list-item">
                <div class="portfolio-item-container">
                    <img src="<?= $portfolio_item['image_url'] ?> " class="portfolio-image">
                    <a href="<?= $portfolio_item['url'] ?>" class="portfolio-title">
                        <?= $portfolio_item['title'] ?>
                    </a>
                </div>
            </li>
        <? endforeach; ?>
    </ul>
</div>
<? endif ?>