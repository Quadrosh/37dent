<?php
defined('_JEXEC') or die;
require_once __DIR__ .'/renderer/head.php';

$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/magnific.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/fonts.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');

//$doc->addScript('templates/' . $this->template . '/js/main.js')


?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" name="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="row">


    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="menu_name">МЕНЮ</span>
        </button>
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <div class="brand_logo">
                    <img src="<?= $this->baseurl ?>/templates/sh/img/logotype.png" alt="Доступная стоматология" />
                    <a href="/">Доступная<br>стоматология</a>
                </div>
                <jdoc:include type="modules" name="sidebar_top" style="well" />
                <jdoc:include type="modules" name="sidebar_middle" style="well" />
                <jdoc:include type="modules" name="sidebar_bottom" style="well" />
<!--                <div id="sidebar_phone">-->
<!--                    <p><span>(4932)</span> 903-800, 902-211</p>-->
<!--                </div>-->
            </div>

            <!-- main area -->
            <div class="col-xs-12 col-sm-9 col-sm-offset-3">

                <div class="row">
                    <div id="header" >
                        <img class="top_banner" src="<?= $this->baseurl ?>/images/top_banner/banner.jpg" alt="Стоматология честных цен в Иваново" />
                        <jdoc:include type="modules" name="content_top" style="block" />
                    </div>

                    <div class="row">
                        <div class="main mt100">
                            <div class="col-sm-12 ">
                                <jdoc:include type="modules" name="content_main" style="xhtml" />
                                <jdoc:include type="message" />
                                <jdoc:include type="component" />
                            </div>
                            <footer>
                                <jdoc:include type="modules" name="footer" style="xhtml" />
                                <jdoc:include type="modules" name="copy" style="xhtml" />
                                <jdoc:include type="modules" name="debug" style="xhtml" />
                            </footer>
                        </div>

                    </div>

                </div>




            </div><!-- /.col-xs-12 main -->
        </div><!--/.row-->
    </div><!--/.container-->


    <jdoc:include type="head" name="foot" />
    <script src="<?= $this->baseurl ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/system/js/caption.js" type="text/javascript"></script>

<!--    <script src="--><?//= $this->baseurl ?><!--/templates/sh/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= $this->baseurl ?>/templates/sh/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/templates/sh/js/magnific.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/templates/sh/js/main.js" type="text/javascript"></script>

</body>
</html>