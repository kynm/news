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
                            <a href="#" class="comments">11 comments</a>
                            <div class="clear"></div>
                            <?php echo $this->Html->image('/img/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload'));?>
                            <p><?php echo $post['Post']['body']; ?></p>
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
                    <h3>Categories</h3>
                    <ul class="list extra extra1">
                        <li><a href="#">Ut wisi enim ad minim veniam</a></li>
                        <li><a href="#">Quis nostrud exerci tation ullamcorper</a></li>
                        <li><a href="#">Suscipit lobortis nisl ut aliquip</a></li>
                        <li><a href="#">Commodo consequat</a></li>
                        <li><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></li>
                        <li><a href="#">Vulputate velit esse molestie consequat</a></li>
                        <li><a href="#">Fel illum dolore eu feugiat nulla</a></li>
                        <li><a href="#">Facilisis at vero eros et accumsan iusto</a></li>
                        <li><a href="#">Odio dignissim qui blandit</a></li>
                        <li><a href="#">Praesent luptatum zzril delenit augue</a></li>
                    </ul>
                    <h3>Archive</h3>
                    <div class="wrapper">
                        <ul class="list extra2 list-pad ">
                            <li><a href="#">November 2012</a></li>
                            <li><a href="#">October 2012</a></li>
                            <li><a href="#">September 2012</a></li>
                            <li><a href="#">August 2012</a></li>
                            <li><a href="#">July 2012</a></li>
                            <li><a href="#">June 2012</a></li>
                        </ul>
                        <ul class="list extra2">
                            <li><a href="#">May 2012</a></li>
                            <li><a href="#">April 2012</a></li>
                            <li><a href="#">March 2012</a></li>
                            <li><a href="#">February 2012</a></li>
                            <li><a href="#">January 2012</a></li>
                            <li><a href="#">December 2011</a></li>
                        </ul>
                        
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>