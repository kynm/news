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
                                <?php foreach ($groups as $key => $value):?>
                                <li class="sub-menu"><?php echo $this->Html->link($value, array('controller' => 'posts', 'action' => 'index', $key));?>
<!--                                     <ul>
                                        <?php foreach ($value as $category): ?>
                                        <li><a href="#"><?php echo $this->Html->link($category, array('controller' => 'posts', 'action' => 'index',$key, $category));?></li>
                                        <?php endforeach;?>
                                    </ul> -->
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>