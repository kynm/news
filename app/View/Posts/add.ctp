<h1>Add Group</h1>
<?php echo $this->Form->create('Post', array('novalidate' => true));?>
  <div class="form-group">
    <?php echo $this->Form->input('title');?>
  </div>
  <div class="form-group">
    <?php echo $this->Ck->input('body');?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
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