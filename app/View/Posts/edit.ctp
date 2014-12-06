<h1>Edit Post</h1>
<?php echo $this->Form->create('Post', array('novalidate' => true));?>
  <div class="form-group">
    <?php echo $this->Form->input('title');?>
  </div>
  <div class="form-group">
    <?php echo $this->Ck->input('body');?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>