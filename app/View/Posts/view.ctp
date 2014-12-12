<?php echo $this->element('menu')?>
<div class="bg-content">
    <!--============================== content =================================-->
    <div id="content">
    <div class="container">
        <div class="row">
            <article class="span8">
                <div class="inner-1">
                    <ul class="list-blog">
                        <li>
                            <h3><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></h3>
                            <?php echo $post['Post']['created']; ?>
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
                                <?php echo $post['Post']['view']?> lượt xem</a>
                            <?php echo $this->Facebook->like(); ?>
                            <?php echo $this->Facebook->share(Router::url( $this->here, true ));?>
                            <div class="clear"></div>
                            <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => ''));?>
                    <div class="wrapper">
                        <ul class="list extra extra1 media-list">
                        <?php foreach ($allPostGroup as $post) :?>
                            <div class="media">
                            <?php echo $this->Html->image(trim($post['Post']['image']), array('class' => 'displayImageSmall1'));?>
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></div>
                        <?php endforeach;?>
                        </ul>
                    </div>
                            <div>
                                <p><?php echo $post['Post']['body']; ?></p>
                            </div>
                        </li>
                        
                    </ul>
                                    <h2>Comments:</h2>
                <?php echo $this->Facebook->comments(array('width' => '620', 'height' => '500')); ?>
                </div>
            </article>
            <article class="span4">
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