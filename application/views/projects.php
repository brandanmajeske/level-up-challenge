<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('projects/newproject'); ?>

<label>title</label>
<input class="input-block-level" type="text" name="title" value="<?php echo set_value('title'); ?>"  />

<label>Description</label>
<textarea class="input-block-level" name="description"><?php echo set_value('description'); ?></textarea>
<br />
<input type="submit" class="btn" value="Submit" />
<?php echo form_close(); ?>