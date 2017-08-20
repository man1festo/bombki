<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
					 <footer class="footer">
      <div class="container">
        <div class="row footer__contacts">
          <div class="pull-left socials">
            <div>Оставайтесь на связи</div><i class="fa fa-instagram"></i><i class="fa fa-vk"></i><i class="fa fa-facebook"></i><i class="fa fa-youtube"></i><i class="fa fa-google-plus"></i>
          </div>
          <form class="pull-right" action="#" method="post">
            <div>Подписаться на рассылку: </div>
            <input type="email" placeholder="email@email.com" name="email">
            <button class="btn btn-success" type="submit">Подписаться</button>
          </form>
        </div>
        <div class="footer__menu">
          <div class="footer__menu__item">
            <h6>Контакты</h6>
            <ul>
              <li><a href="#">Телефон: 8 (800) 201 80 80</a></li>
              <li><a href="#">Почта: daniiltserin@ya.ru</a></li>
              <li><a href="#">Адрес: </a></li>
              <li><a href="#">Все Контакты</a></li>
            </ul>
          </div>
          <div class="footer__menu__item">
            <h6>Поддержка клиентов</h6>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left_bottom",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left_bottom",
                    "USE_EXT" => "N"
                )
            );?>
          </div>
          <div class="footer__menu__item">
            <h6>О нас</h6>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "right_bottom",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "right_bottom",
                    "USE_EXT" => "N"
                )
            );?>

          </div>
        </div>
        <div class="footer__copyright">
          <div class="footer__copyright__copy">
            <p>&copy; Boombki - зарегистрированная торговая марка. - Все права защищены.</p>
          </div>
          <div class="footer__copyright__sitemap"><a class="sitemap" href="#">Карта сайта</a></div>
        </div>
      </div>
    </footer>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
  </body>
</html>