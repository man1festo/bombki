<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title> Главная
    </title>

    <!-- Bootstrap-->
    <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <script src="https://use.fontawesome.com/2ea3c9e3d7.js"></script>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
  </head>
  <body>
  <?$APPLICATION->ShowPanel();?>
    <header class="header">
      <div class="container header-container">
        <div class="header__logo col-md-4"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></div>

        <!--<div class="search-wrap col-md-5 col-sm-6 pull-left">-->
          <!--<form action="/" class="pull-left form-inline" id="search-form">-->
            <!--<div class="input-group search-field">-->
              <!--<i class="fa fa-search" aria-hidden="true"></i>-->
              <!--<input class="form-control" id="search-field" type="text">-->
            <!--</div>-->
            <!--<div class="input-group">-->
              <!--<input class="form-control" id="search-submit" type="submit" value="Вход"></input>-->
            <!--</div>-->
          <!--</form>-->
        <!--</div>-->

        <div class="header__sign col-md-3 col-sm-6 pull-right">
          <div class="login"><img src="<?=SITE_TEMPLATE_PATH?>/img/gingerbread.png" alt="">Вход</div>
          <div class="cart"><img src="<?=SITE_TEMPLATE_PATH?>/img/xmas-shopping-black.png" alt="">Корзина</div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display-->
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active shop-mega-menu dropdown mega-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-navicon"></i>Интернет магазин</a>
                <ul class="dropdown-menu mega-dropdown-menu row">
                  <li class="col-sm-7 mega-menu__ware-cats">
                    <h6>Категории товаров</h6>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "popup_left",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "popup_left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "popup_left",
                            "USE_EXT" => "N"
                        )
                    );?>
                  </li>
                  <li class="col-sm-5 mega-menu__news">
                    <h6>Новинки</h6>
                      <?$APPLICATION->IncludeComponent(
                          "bitrix:menu",
                          "popup_right",
                          Array(
                              "ALLOW_MULTI_SELECT" => "N",
                              "CHILD_MENU_TYPE" => "popup_right",
                              "DELAY" => "N",
                              "MAX_LEVEL" => "1",
                              "MENU_CACHE_GET_VARS" => array(""),
                              "MENU_CACHE_TIME" => "3600",
                              "MENU_CACHE_TYPE" => "N",
                              "MENU_CACHE_USE_GROUPS" => "Y",
                              "ROOT_MENU_TYPE" => "popup_right",
                              "USE_EXT" => "N"
                          )
                      );?>
                  </li>
                </ul>
              </li>
            </ul>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "navbar",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "navbar",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "navbar",
                    "USE_EXT" => "N"
                )
            );?>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="tel: 8 (800) 201 80 00">Позвонить: 8 (800) 201 80 00</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse-->
        </div>
        <!-- /.container-fluid-->
      </nav>
    </header>
    <div class="container">
      <div class="advantages">
        <div class="advantages__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/santa-slide.png">
          <div>Доставка из интернет-магазина в тот же день.</div>
        </div>
        <div class="advantages__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/santa-claus.png">
          <div>12 000 клиентов доверили нам украшение своего дома.</div>
        </div>
        <div class="advantages__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/christmas-tree-colored.png">
          <div>Доставляем заказы по всей России.</div>
        </div>
      </div>
    </div>