<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='loginza-verification' content='c087f9ee270d394785e1e56953635ffe' />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <?php wp_head(); ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.caret.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/typeahead.bundle.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/character.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Roboto+Mono">

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
           {lang: 'ru'}
           </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body <?php body_class(); ?>>
  <div id="topmenu">
        <nav class="navbar navbar-default navbar-tili" role="navigation" style="margin-top:0px;">

        <div class="container-fluid topbluebox">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

           <!--  <span class="navbar-brand hidden-xs"> Меню</span> -->
            <div class="row topcenter">
              <div class="col-md-8 col-sm-6 col-xs-6">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Меню</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <h1 id="logotext"><a href="<?php bloginfo('url'); ?>">Tili<span class="green">.kg</span> <span class="grey hidden-xs">Все для изучения Киргизского языка!</span></a></h1>
              </div>
              <div class="col-md-3 .col-sm-3 col-xs-4 pull-right">
                <div class="login">
                 <?php
                 if ( is_user_logged_in() ) {?>
                      	Добро пожаловать <?php global $current_user;
                         get_currentuserinfo();
                         echo "<b>".$current_user->user_login . "</b>\n";
                         ?>
                         | <a href="/wp-login.php?action=logout">Выйти</a>

                   <?php }
                 else {?>
                     	<a href="http://tili.kg/wp-login.php" class="login-i">Войти</a>  <a href="http://tili.kg/wp-login.php?action=register" class="reg-i">Регистрация</a>
                 <?php }
                 ?>
                 </div>
              </div>
            </div>

          </div>
          <div class="collapse navbar-collapse " id="navbar-collapse">
              <div class="menulogo">
                 <center><img src="http://tili.kg/wp-content/themes/TiLi/images/logo.png" /> </center>
              </div>
               <ul class="nav navbar-nav">
                 <li class="iconhome dropdown"><a href="/">Главная</a></li>
                 <li role="separator" class="divider"></li>
                 <li class="dropdown iconslovar">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                       Словарь<span class="caret"></span>
                   </a>
                   <ul class="dropdown-menu">
                     <li><a href="/dict/dlist/">cловари от а до я</a></li>
                     <li><a href="/dict/glossary/">глосарий</a></li>
                   </ul>
                 </li>
                  <li class="iconuse"><a href="/category/useful">Полезное</a></li>
                  <li class="iconapps "><a href="/">Приложения</a></li>
                  <li class="iconlove"><a href="#">Благодарности</a></li>
                  <li class="iconhelp"><a href="#">Как помочь проекту?</a></li>
                  <li class="iconmail"><a href="#">Контакты</a></li>
                  <li role="separator" class="divider"></li>


               </ul>

               <?php
                    wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'container'         => 'false',
                       'container_class'   => '',
                       'container_id'      => '',
                       'menu_class'        => 'bmenu' )
                   );
               ?>
            </div>

              <?php
                  /* wp_nav_menu( array(
                      'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav side-menu-glavnoe',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new wp_bootstrap_navwalker())
                  ); */
              ?>

          </div>
          <div class="headersearch">
            <div class="col-md-2 col-sm-1">&nbsp; </div>
            <div class="searchform col-md-8 col-sm-10 col-xs-10">
              <label> <h1>Кыргызско <-> Русский словарь</h1></label>
              <form id="mdform" onsubmit="location.href = '/dict/#'+document.getElementById('stxt').value;  return false;">
                  <div class="">
                    <input type="text" id="stxt"  class="stxt col-md-10 col-sm-10 col-xs-10 searchtext" required="">
                    <input type="submit" class="sbtn" value="Найти" />
                  </div>
                </form>
                <div id="float_chars_block">
                  <!--  <div class="close">x</div> -->
                    <span title="Ctrl+Alt+н">ң</span>
                    <span title="Ctrl+Alt+о">ө</span>
                    <span title="Ctrl+Alt+у">ү</span>
                    <div style="clear:both"></div>
                </div>
                <div id="float_chars_icon"><img src="<?php bloginfo('template_url'); ?>/images/character.gif" border="0"/></div>


            </div>
            <div class="col-md-2 col-sm-1 ">&nbsp; </div>
          </div>


            <!--
            <form id="" action="<?php bloginfo('url'); ?>" method="get">
                 <input placeholder="Введите слово для поиска в словаре" type="text" />
                 <input type="submit" class="sbtn" value="Перевод" onClick="//location.href = '<?php bloginfo('url'); ?>/dict/#'+document.getElementById('stxt').value;  return false;"/>
            </form>
            -->

      </nav>

</div>

<div id="site">
	<div id="header">
	</div>
