<div class="bg-content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<!--============================== slider =================================-->
				<div class="flexslider">
					<ul class="slides">
						<li> <?php echo $this->Html->image("slide-1.jpg", array("alt" => ""));?> </li>
						<li> <?php echo $this->Html->image("slide-2.jpg", array("alt" => ""));?> </li>
						<li> <?php echo $this->Html->image("slide-3.jpg", array("alt" => ""));?> </li>
						<li> <?php echo $this->Html->image("slide-4.jpg", array("alt" => ""));?> </li>
						<li> <?php echo $this->Html->image("slide-5.jpg", array("alt" => ""));?> </li>
					</ul>
				</div>
<!-- 				<span id="responsiveFlag"></span>
				<div class="block-slogan">
					<h2>Welcome!</h2>
				</div> -->
			</div>
		</div>
	</div>
	
	<!--============================== content =================================-->
	
	<div id="content" class="content-extra"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
		<div class="row-1">
			<div class="container">
				<div class="row">
					<ul class="thumbnails thumbnails-1">
						<?php foreach ($posts as $post): ?>
						<li class="span3">
							<div class="thumbnail thumbnail-1">
								<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
								<?php echo $this->Html->image('/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload'));?>
								<section> <<!-- strong>At vero eos et accusamus et iusto </strong>
									<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p> -->
								<?php echo $this->Html->link('Read More', array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-1'));?> </section>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="pagination">
			<ul>
				<?php
				echo $this->Paginator->prev( '<<', array( 'class' => '', 'tag' => 'li' ), null, array( 'class' => 'disabled myclass', 'tag' => 'li' ) );
				echo $this->Paginator->numbers( array( 'tag' => 'li', 'separator' => '', 'currentClass' => 'disabled myclass' ) );
				echo $this->Paginator->next( '>>', array( 'class' => '', 'tag' => 'li' ), null, array( 'class' => 'disabled myclass', 'tag' => 'li' ) );
				?>
			</ul>
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