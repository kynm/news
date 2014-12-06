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
				<span id="responsiveFlag"></span>
				<div class="block-slogan">
					<h2>Welcome!</h2>
					<div>
						<p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a> for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
					</div>
				</div>
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
						<li class="span2">
							<div class="thumbnail thumbnail-1">
								<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
								<?php echo $this->Html->image('/img/upload/'. trim($post['Post']['image']), array("alt" => "", 'data-src' => '/upload'));?>
								<section> <strong>At vero eos et accusamus et iusto </strong>
									<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
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