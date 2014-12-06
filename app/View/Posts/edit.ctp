<?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data'));?>
<div class="form-group">
    <?php echo $this->Form->input('title');?>
    <?php echo $this->Form->input('group', $groups);?>
    <?php echo $this->Form->file('image'); ?>
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>