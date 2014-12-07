<?php echo $this->element('menu')?>
<h1>Add post</h1>
<div class="bg-content">
<div id="content" class="content-extra">
<?php if(isset($errors)):?>
    <div class="messageBox error">
        <?php
        foreach ($errors as $key => $value) :
        echo $value[0];
        echo '</br>';
        endforeach;
        ?>
    </div>
<?php endif;?>
<?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data'));?>
<div class="form-group">
    <?php echo $this->Form->input('title');?>
    <?php echo $this->Form->input('group', $groups);?>
    <?php echo $this->Form->file('image'); ?>
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
<?php echo $this->Html->script('ckeditor/ckeditor.js');?>