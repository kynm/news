<?php echo $this->element('menu')?>
<div class="bg-content">
    <!--============================== content =================================-->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <ul class="thumbnails">
                        <?php foreach ($posts as $post): ?>
                        <li class="span3">
                            <div class="wrap">
                            <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => 'displayImage'));?>
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
                    
                    <?php foreach ($groups as $key => $value):?>
                    <div class="span9 row">
                    <?php $posts = $allDataView[$key];
                    $post = array_pop($posts);
                    if ($post) :?>
                        <h3><p><font color="black" style="font-family: 'Tangerine', serif;"><?php echo $value?></font></p></h3>
                        <div class="span4">
                            <div class="wrap">
                                <img class="displayImage" src="<?php echo trim($post['Post']['image']);?>" alt="<?php echo $post['Post']['title']?>">
                                <h3 class="desc">
                                <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                                </h3>
                            </div>
                        </div>
                        <ul class="media-list span4 extra1 extra">
                        <?php foreach ($posts as $post):?>
                            <li class="media">
                                <img src="<?php echo trim($post['Post']['image']);?>" alt="<?php echo $post['Post']['title']?>" class="displayImageSmall">
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                        <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                    </div>
                    <?php endforeach;?>
                </div>
                <article class="span3">
                    <h3 class="extra">Search</h3>
                    <?php echo $this->Form->create('Post',array('action' => 'category','novalidate' => true));?>
                    <?php echo $this->Form->input('search', array('type'=>'text','label'=>false,'error' => false));?>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <?php echo $this->Facebook->likebox('https://www.facebook.com/blogtinhyeutrongta', array('width' => 370))?>
                    <h3><p> <font color="black">Bài Viết Mới</font></p></h3>
                    <ul class="list extra extra1 media-list">
                        <?php foreach ($postNews as $post) :?>
                        <li class="media">
                            <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => 'displayImageSmall'));?>
                        <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                        <?php endforeach;?>
                    </ul>
                    <h3><p><font color="black">Bài viết nổi bật</font></p></h3>
                    <div class="wrapper">
                        <ul class="list extra extra1 media-list">
                            <?php foreach ($postHots as $post) :?>
                            <li class="media">
                                <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => 'displayImageSmall'));?>
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>