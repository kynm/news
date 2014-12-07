
<?php echo $this->element('menu')?>
<div class="bg-content">
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
								<section>
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