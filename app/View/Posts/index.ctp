
<?php echo $this->element('menu')?>
<div class="row">
    <div class="container">
        <div class="span12">
            <ul class="thumbnails thumbnails-1">
                <?php foreach ($posts as $post): ?>
                <li class="span3">
                    <div class="wrap">
                        <img src="<?php echo trim($post['Post']['image']);?>" alt="<?php echo $post['Post']['title']?>" style="margin-left:0px;width:270px;height:170px;">
                        <h3 class="desc">
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                        </h3>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="pagination pagination-large">
                <ul class="pagination">
                    <?php
                        echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                        echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                    ?>
                </ul>
            </div>                
        </div>
    </div>
</div>