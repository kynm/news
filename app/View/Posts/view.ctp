<div class="bg-content">
    <!--============================== content =================================-->
    <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
        <div class="row">
            <article class="span8">
                <div class="inner-1">
                    <ul class="list-blog">
                        <li>
                            <h3><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></h3>
                            <?php echo $post['Post']['created']; ?>
                            <div class="name-author">by <a href="#">Admin</a></div>
                            <a href="#" class="comments"><?php echo $post['Post']['view']?> lượt xem</a>
                            <?php echo $this->Facebook->like(); ?>
                            <?php echo $this->Facebook->share(Router::url( $this->here, true ));?>
                            <div class="clear"></div>
                            <?php echo $this->Html->image('/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload'));?>
                            <div class="wrapper">
                                <ul class="list extra2 list-pad ">
                                <?php foreach ($allPostGroup as $post) :?>
                                    <li><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                            <div>
                                <p><?php echo $post['Post']['body']; ?></p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <h2>Comments:</h2>
                <?php echo $this->Facebook->comments(array('width' => '620', 'height' => '500')); ?>
            </article>
            <article class="span4">
                <h3 class="extra">Search</h3>
                <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
                    <div class="clearfix">
                        <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
                        <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> 
                    </div>
                </form>
                    <h3><p> <font color="black">Bài Viết Mới</font></p></h3>
                    <ul class="list extra extra1 media-list">
                    <?php foreach ($postNews as $post) :?>
                        <li class="media">
                        <?php echo $this->Html->image('/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload', 'width'=>'100px', 'height' => '100px'));?>
                        <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                    <?php endforeach;?>
                    </ul>
                    <h3><p><font color="black">Bài viết nổi bật</font></p></h3>
                    <div class="wrapper">
                        <ul class="list extra extra1 media-list">
                        <?php foreach ($postHots as $post) :?>
                            <li class="media">
                            <?php echo $this->Html->image('/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload', 'width'=>'100px', 'height' => '100px'));?>
                            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem Quảng Cáo</a>';
    }
    }
</script>
<style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a></div>
<div id="float_content_right">
 
<a href="http://tuhocphp.com/" target="_blank"><?php echo $this->Html->image("slide-1.jpg", array("alt" => ""));?></a>
 
</div>
</div>