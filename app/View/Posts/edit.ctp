<?php echo $this->element('menu')?>
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
<?php echo $this->Form->create('Post', array('action' => 'edit', 'enctype'=>'multipart/form-data', 'novalidate' => true));?>
<div class="form-group">
    <?php echo $this->Form->input('title', array('type'=>'text','label'=>false,'error' => false));?>
    <?php echo $this->Form->input('group', array('type' => 'select' , 'options' => $groups));?>
    <?php echo $this->Html->image(trim($this->request->data['Post']['image']), array('class' => 'displayImage'));?>
    <?php echo $this->Form->hidden('imageName', array('name' => 'imageName', 'default' => $this->request->data['Post']['image']));?>
    <?php echo $this->Form->input('image', array('type'=>'file','label'=>false,'error' => false)); ?>
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>