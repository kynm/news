<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <h1 class="brand brand_"><a href="index.html"><?php echo $this->Html->image("logo.gif", array('url' => array('controller' => 'posts', 'action' => 'index')));?> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li class="active"><a href="index.html">About</a></li>
                                <li class="sub-menu"><a href="index-1.html">Services</a>
                                <?php foreach ($groups as $key => $value):?>
                                <li class="sub-menu"><?php echo $this->Html->link($key, array('controller' => 'posts', 'action' => 'index', $key));?>
                                    <ul>
                                        <?php foreach ($value as $category): ?>
                                        <li><a href="#"><?php echo $this->Html->link($category, array('controller' => 'posts', 'action' => 'index',$key, $category));?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        echo $this->Html->script('ckeditor/ckeditor.js');
        echo $this->Html->css('cake.generic');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('responsive');
        echo $this->Html->css('style');
        echo $this->Html->css('touchTouch');
        echo $this->Html->css('kwicks-slider');
        echo $this->Html->script('jquery');
        echo $this->Html->script('superfish');
        echo $this->Html->script('jquery.flexslider-min');
        echo $this->Html->script('jquery.kwicks-1.5.1');
        echo $this->Html->script('jquery.easing.1.3');
        echo $this->Html->script('touchTouch.jquery');
        echo $this->Html->script('bootstrap');
    ?>
</head>
<body>
    <div id="container">
        <div id="content">
            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <ul class="list-social pull-right">
                <li><a class="icon-1" href="#"></a></li>
                <li><a class="icon-2" href="#"></a></li>
                <li><a class="icon-3" href="#"></a></li>
                <li><a class="icon-4" href="#"></a></li>
            </ul>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>