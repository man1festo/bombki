<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
<div class="hero">
      <div class="hero-content">
        <h1>Украшайте дом безлимитно</h1>
        <p>Вдохновляясь нашими решениями и идеями</p><a class="btn btn-action">Узнать больше</a>
      </div>
    </div>
    <div class="categories container">
      <div class="row"><a class="col-sm-6 category__item" href="#"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/gadget-gifts.png" alt="">
          <p class="categories__categorie__type">Серия</p>
          <div class="categories__divider"></div>
          <h3>Эксклюзивная серия</h3></a><a class="col-sm-6 category__item" href="#"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/gifts.png" alt="">
          <p class="categories__categorie__type">Коллекция</p>
          <div class="categories__divider"></div>
          <h3>Коллекционные предметы</h3></a></div>
      <div class="row"><a class="col-sm-4 category__item" href="#"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/map-4.png" alt="">
          <p class="categories__categorie__type">Коллекция</p>
          <div class="categories__divider"></div>
          <h3>Символы 2018</h3></a><a class="col-sm-4 category__item" href="#"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/mag-3.png" alt="">
          <p class="categories__categorie__type">Коллекция</p>
          <div class="categories__divider"></div>
          <h3>Подарки детям</h3></a><a class="col-sm-4 category__item" href="#"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/luxury.png" alt="">
          <p class="categories__categorie__type">Серия</p>
          <div class="categories__divider"></div>
          <h3>Серия уют</h3></a></div>
    </div>
    <div class="shop container">
      <div class="row shop__header">
        <div class="col-sm-3 shop__items-count">518 товаров</div>
        <div class="col-md-5 shop__items-header">Каталог товаров</div>
        <div class="col-md-3 col-md-offset-1 shop__items-sort">Сортировка по
          <select id="sort" name="sort">
            <option value="1">популярные</option>
            <option value="2">дешевые</option>
            <option value="3">дорогие</option>
            <option value="4">акции</option>
          </select>
        </div>
      </div>
      <div class="row shop__catalog">
        <div class="col-sm-3 shop__catalog__categories-select">
          <ul class="list-group">
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/star-2.png" alt=""><a href="#">Новинки</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/wreath.png" alt=""><a href="#">Символы года 2018</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/snowbulb.png" alt=""><a href="#">Классические игрушки</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/present-box-1.png" alt=""><a href="#">Новогодние ларцы</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/xmas-socks.png" alt=""><a href="#">Коллекционные</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/bell.png" alt=""><a href="#">Игры</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/bow.png" alt=""><a href="#">Подарки детям</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/xmas-tag.png" alt=""><a href="#">Скидки</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/christmas-tree.png" alt=""><a href="#">Елочные игрушки</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/ornament-1.png" alt=""><a href="#">Шары</a></li>
            <li class="list-group-item"><img src="<?=SITE_TEMPLATE_PATH?>/img/star-1.png" alt=""><a href="#">Макушки</a></li>
          </ul>
          <div class="banner"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/banner.png" alt=""></div>
        </div>
        <div class="col-sm-9 shop__catalog__items">
          <div class="row">
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 shop__catalog__item play"><img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/img/shop-item.jpg" alt="">
              <div class="shop__catalog__item__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              <hr>
              <h4>Елочная игрушка</h4>
              <p>Сделана из уникального материала</p>
              <div class="price">
                <div class="pull-left price__fee">4 790 руб.</div>
                <div class="pull-right price__in text-success">В наличии</div>
              </div>
            </div>
          </div>
          <div class="show-more-container text-center" style="margin-top: 2rem;">
            <button class="btn btn-show-more" id="showMore">Показать еще </button>
          </div>
        </div>
      </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>