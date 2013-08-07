<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('projects/newproject'); ?>
<fieldset>
<div class="form-group">	
<label>Title<br />
<input class="form-control input-lg" required type="text" name="title" value="<?php echo set_value('title'); ?>"  /></label>
</div>
<div class="form-group">
<label>Description</label>
<textarea class="input-block-level" required name="description"><?php echo set_value('description'); ?></textarea>
</div>
<input type="submit" class="btn btn-primary" value="Submit" />
</fieldset>
<?php echo form_close(); ?>