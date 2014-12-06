<h1>Add post</h1>
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
</div>
<div class="form-group">
    <?php echo $this->Form->file('image'); ?>
</div>
<div class="form-group">
    <?php echo $this->Ck->input('body');?>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>