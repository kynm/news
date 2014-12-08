<?php echo $this->element('menu')?>
<?php echo $this->Form->create('Post');?>
<div class="form-group">
    <?php echo $this->Form->input('title', array('type'=>'text','label'=>false,'error' => false));?>
    <?php echo $this->Form->input('group', array('type' => 'select' , 'options' => $groups));?>
    <?php echo $this->Form->input('image', array('type'=>'text','label'=>false,'error' => false)); ?>
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>