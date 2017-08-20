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
<?
    if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] == 'Y')
    {
    $basketAction = isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '';
    }
    else
    {
    $basketAction = isset($arParams['SECTION_ADD_TO_BASKET_ACTION']) ? $arParams['SECTION_ADD_TO_BASKET_ACTION'] : '';
    }

    if ($isFilter || $isSidebar): ?>
    <div class="cat-about container">
        <div class="row">
            <div class="col-md-12">
                <img class="cat-thumbnail" src="<?=SITE_TEMPLATE_PATH?>/img/cat-thumbnail.png" alt="cat-thumbnail">
                <h2 class="cat-title">Эксклюзивные товары</h2>
                <div class="cat-description">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.</div>
            </div>
        </div>
        <div class="cat-about-bg"></div>
    </div>
    <div class="bread-crumbs container">
        <div class="row">
            <p class="bread-crumbs-item"><a href="#">Главная</a> <i class="fa fa-angle-right" aria-hidden="true"></i></p>
            <p class="bread-crumbs-item"><a href="#">Коллекционные предметы</a> <i class="fa fa-angle-right" aria-hidden="true"></i></p>
        </div>
    </div>
<div class="shop container">
    <div class="row shop__header">
        <div class="col-sm-3 shop__sort-by-title">Сортировать по категории</div>
        <div class="col-md-5 col-sm-4 col-xs-6 shop__items-header"><p>Всего 218 товаров</p></div>
        <div class="col-md-4 col-sm-5 col-xs-6 shop__items-sort">Сортировка по
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
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.smart.filter",
                "",
                array(
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "SECTION_ID" => $arCurSection['ID'],
                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                    "PRICE_CODE" => $arParams["PRICE_CODE"],
                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                    "SAVE_IN_SESSION" => "N",
                    "FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
                    "XML_EXPORT" => "Y",
                    "SECTION_TITLE" => "NAME",
                    "SECTION_DESCRIPTION" => "DESCRIPTION",
                    'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
                    "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
                    'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
                    'CURRENCY_ID' => $arParams['CURRENCY_ID'],
                    "SEF_MODE" => $arParams["SEF_MODE"],
                    "SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
                    "SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                    "INSTANT_RELOAD" => $arParams["INSTANT_RELOAD"],
                ),
                $component,
                array('HIDE_ICONS' => 'Y')
            );
            ?>
        </div>
        <?endif?>

<?



        $intSectionID = $APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "",
        array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
        "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
        "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
        "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
        "PROPERTY_CODE_MOBILE" => $arParams["LIST_PROPERTY_CODE_MOBILE"],
        "META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
        "META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
        "BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
        "BASKET_URL" => $arParams["BASKET_URL"],
        "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
        "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
        "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
        "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
        "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "MESSAGE_404" => $arParams["~MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
        "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
        "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
        "PRICE_CODE" => $arParams["PRICE_CODE"],
        "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
        "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

        "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
        "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
        "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
        "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
        "PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],

        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "LAZY_LOAD" => $arParams["LAZY_LOAD"],
        "MESS_BTN_LAZY_LOAD" => $arParams["~MESS_BTN_LAZY_LOAD"],
        "LOAD_ON_SCROLL" => $arParams["LOAD_ON_SCROLL"],

        "OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
        "OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
        "OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
        "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
        "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
        "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
        "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
        "OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],
        "SHOW_ALL_WO_SECTION" => "Y",
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
        "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
        'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
        'CURRENCY_ID' => $arParams['CURRENCY_ID'],
        'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
        'HIDE_NOT_AVAILABLE_OFFERS' => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],

        'LABEL_PROP' => $arParams['LABEL_PROP'],
        'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
        'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
        'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
        'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
        'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
        'PRODUCT_ROW_VARIANTS' => $arParams['LIST_PRODUCT_ROW_VARIANTS'],
        'ENLARGE_PRODUCT' => $arParams['LIST_ENLARGE_PRODUCT'],
        'ENLARGE_PROP' => isset($arParams['LIST_ENLARGE_PROP']) ? $arParams['LIST_ENLARGE_PROP'] : '',
        'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
        'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
        'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

        'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
        'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
        'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
        'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
        'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
        'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
        'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
        'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
        'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
        'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
        'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
        'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
        'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
        'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
        'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
        'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
        'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

        'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
        'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
        'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

        'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
        "ADD_SECTIONS_CHAIN" => "N",
        'ADD_TO_BASKET_ACTION' => $basketAction,
        'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
        'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
        'COMPARE_NAME' => $arParams['COMPARE_NAME'],
        'BACKGROUND_IMAGE' => (isset($arParams['SECTION_BACKGROUND_IMAGE']) ? $arParams['SECTION_BACKGROUND_IMAGE'] : ''),
        'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
        'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : '')
        ),
        $component
        );
        ?>
    </div>
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