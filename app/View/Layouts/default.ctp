<!DOCTYPE html>
<html>
<head>
    <?php
        //echo $this->Html->css('cake.generic');
        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('responsive');
        echo $this->Html->css('style');
        //echo $this->Html->css('touchTouch');
        //echo $this->Html->css('kwicks-slider');
        echo $this->Html->script('jquery');
        //echo $this->Html->script('superfish');
        //echo $this->Html->script('jquery.flexslider-min');
        //echo $this->Html->script('jquery.kwicks-1.5.1');
        //echo $this->Html->script('jquery.easing.1.3');
        //echo $this->Html->script('touchTouch.jquery');
        echo $this->Html->script('bootstrap');
    ?>
    <?php echo $this->Facebook->html(); ?>
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
</body>
<?php echo $this->Facebook->init(); ?>
</html>