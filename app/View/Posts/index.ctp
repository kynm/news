<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <?php echo $this->Html->image("slide-1.jpg", array("alt" => "alternative_text"));?> </li>
            <li> <?php echo $this->Html->image("slide-2.jpg", array("alt" => "alternative_text"));?> </li>
            <li> <?php echo $this->Html->image("slide-3.jpg", array("alt" => "alternative_text"));?> </li>
            <li> <?php echo $this->Html->image("slide-4.jpg", array("alt" => "alternative_text"));?> </li>
            <li> <?php echo $this->Html->image("slide-5.jpg", array("alt" => "alternative_text"));?> </li>
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
                <li class="span3">
                    <div class="thumbnail thumbnail-1">
                        <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                        <?php echo $this->Html->image("page1-img1.jpg", array("alt" => "alternative_text"));?>
                        <section> <strong>At vero eos et accusamus et iusto </strong>
                              <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                              <a href="#" class="btn btn-1">Read More</a> </section>
                    </div>
                </li>
            <?php endforeach; ?>
          </ul>
            </div>
      </div>
        </div>
  </div>
    </div>
<?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('responsive');
        echo $this->Html->css('style');
        echo $this->Html->css('touchTouch');
        echo $this->Html->css('kwicks-slider');
        echo $this->Html->script('jquery');
        echo $this->Html->script('superfish');
        echo $this->Html->script('jquery.flexslider-min');
        echo $this->Html->script('jquery.kwicks-1.5.1');
        echo $this->Html->script('jquery.easing.1.3');
        echo $this->Html->script('touchTouch.jquery');
        echo $this->Html->script('bootstrap');

?>