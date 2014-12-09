<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('responsive');
        echo $this->Html->css('style');
        echo $this->Html->script('jquery');
        echo $this->Html->script('bootstrap');
    ?>
    <?php echo $this->Facebook->html(); ?>
</head>
<body>
    <div id="bg-content">
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