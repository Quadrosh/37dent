<?php
defined('_JEXEC') or die;

//$doc = JFactory::getDocument();
//
//$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
////$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');




?>
<!DOCTYPE html>
<html>
<head>
    <link href="<?= $this->baseurl ?>/templates/sh/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="<?= $this->baseurl ?>/templates/sh/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->baseurl ?>/templates/sh/css/style.css" rel="stylesheet" type="text/css" />



    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <!-- Hamburger -->
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Brand -->
                    <div class="brand-name-wrapper">
                        <a class="navbar-brand" href="#">
                                    <jdoc:include type="modules" name="sidebar_top" style="well" />
                        </a>
                    </div>


                </div>

            </div>

            <!-- Main Menu -->
            <div class="side-menu-container">


                <ul class="nav navbar-nav">
                    <jdoc:include type="modules" name="sidebar_middle" style="well" />
                    <jdoc:include type="modules" name="sidebar_bottom" style="well" />

                    <li><a href="#"><span class="glyphicon glyphicon-send"></span> Link</a></li>
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
<!--                    <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li>-->
<!---->
<!---->
<!--                    <li class="panel panel-default" id="dropdown">-->
<!--                        <a data-toggle="collapse" href="#dropdown-lvl1">-->
<!--                            <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>-->
<!--                        </a>-->
<!---->
<!---->
<!--                        <div id="dropdown-lvl1" class="panel-collapse collapse">-->
<!--                            <div class="panel-body">-->
<!--                                <ul class="nav navbar-nav">-->
<!--                                    <li><a href="#">Link</a></li>-->
<!--                                    <li><a href="#">Link</a></li>-->
<!--                                    <li><a href="#">Link</a></li>-->
<!---->
<!---->
<!--                                    <li class="panel panel-default" id="dropdown">-->
<!--                                        <a data-toggle="collapse" href="#dropdown-lvl2">-->
<!--                                            <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>-->
<!--                                        </a>-->
<!--                                        <div id="dropdown-lvl2" class="panel-collapse collapse">-->
<!--                                            <div class="panel-body">-->
<!--                                                <ul class="nav navbar-nav">-->
<!--                                                    <li><a href="#">Link</a></li>-->
<!--                                                    <li><a href="#">Link</a></li>-->
<!--                                                    <li><a href="#">Link</a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!---->
                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
<!--<div class="nav-side-menu">-->
<!--    <div class="brand">-->
<!--        <jdoc:include type="modules" name="sidebar_top" style="well" />-->
<!--    </div>-->
<!---->
<!--    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar-content">-->
<!--        <span class="sr-only">Toggle navigation</span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--    </button>-->
<!---->
<!--<!--    <i class="glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#sidebar-content"></i>-->
<!---->
<!--    <div class="menu-list">-->
<!--        <div id="sidebar-content" class="collapse menu-content  out">-->
<!--            <jdoc:include type="modules" name="sidebar_middle" style="well" />-->
<!--            <jdoc:include type="modules" name="sidebar_bottom" style="well" />-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!-- main container -->
<div class='container-fluid'>
    <div class="side-body">
        <!-- mid container - includes main content area and sidebar -->
        <div class='row'>

            <!-- main content area -->
            <div id="main_content" class='col-sm-12'>
                <!-- header -->
                <div class="row">
                    <div id="header" class="col-sm-12">
                        <jdoc:include type="modules" name="content_top" style="block" />
                    </div>
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="content_main" style="xhtml" />
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                    </div>
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="footer" style="xhtml" />
                        <jdoc:include type="modules" name="copy" style="xhtml" />
                        <jdoc:include type="modules" name="debug" style="xhtml" />
                    </div>
                </div>


            </div>




        </div>
    </div>





</div>

    <script src="<?= $this->baseurl ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/media/system/js/caption.js" type="text/javascript"></script>

<!--    <script src="--><?//= $this->baseurl ?><!--/templates/sh/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= $this->baseurl ?>/templates/sh/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= $this->baseurl ?>/templates/sh/js/main.js" type="text/javascript"></script>

</body>
</html>