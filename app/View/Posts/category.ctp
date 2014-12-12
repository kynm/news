<?php echo $this->element('menu')?>
<div class="bg-content">
    <!--============================== content =================================-->
    <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
        <div class="row">
            <article class="span8">
                <?php if (count($posts)): ?>
                <div class="inner-1">
                    <ul class="list-blog">
                        <?php foreach ($posts as $post): ?>
                        <li>
                            <h3><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></h3>
                            <time datetime="<?php echo $post['Post']['created'];?>" class="date-1"><?php echo $post['Post']['created'];?></time>
                            <div class="name-author">by <a href="#">Admin</a></div>
                            <a href="#" class="comments">
                                <?php if($this->Session->read('Auth.User.id') == $post['Post']['post_author']): ?>
                                    <?php echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $post['Post']['id']),
                                    array('confirm' => 'Are you sure?'));
                                    ?>
                                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
                                <?php endif?>
                                <?php echo $post['Post']['view'];?> lượt xem</a>
                            <div class="clear"></div>
                            <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => ''));?>
                            <p><?php echo substr($post['Post']['body'],0, 300);?>.....</p>
                            <?php echo $this->Html->link('Read More', array('action' => 'view', $post['Post']['id']));?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <div class="pagination pagination-large">
                    <ul class="pagination">
                        <?php
                            echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                            echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                        ?>
                    </ul>
                </div>
            <?php else:?>
            no result
            <?php endif;?>
            </article>
            <article class="span4">
                <h3 class="extra">Search</h3>
                <?php echo $this->Form->create('Post',array('action' => 'category','novalidate' => true));?>
                    <?php echo $this->Form->input('search', array('type'=>'text','label'=>false,'error' => false));?>
                <button type="submit" class="btn btn-default">Search</button>
                </form>
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