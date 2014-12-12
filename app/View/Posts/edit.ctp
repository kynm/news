<?php echo $this->element('menu')?>
<?php echo $this->Form->create('Post', array('enctype'=>'multipart/form-data', 'novalidate' => true));?>
<div class="form-group">
    <?php echo $this->Form->input('title', array('type'=>'text','label'=>false,'error' => false));?>
    <?php echo $this->Form->input('group', array('type' => 'select' , 'options' => $groups));?>
    <img src="<?php echo trim($this->request->data['Post']['image']);?>" alt="<?php echo $post['Post']['title']?>" class="displayImageSmall">
    <?php echo $this->Form->hidden('imageName', array('name' => 'imageName', 'default' => $post['Post']['image']));?>
    <?php echo $this->Form->input('image', array('type'=>'file','label'=>false,'error' => false)); ?>
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>