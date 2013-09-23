
<h2>Register</h2>

<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
<div class="col-8 col-lg-offset-2">
<?php echo form_open('register/validate'); ?>
<fieldset>
<div class="col-6 pull-left">
<div class="form-group">
<label>Username</label>
<input class="form-control input-lg" type="text" name="username" required value="<?php echo set_value('username'); ?>"  />
</div>
<div class="form-group">
<label>Email Address</label>
<input class="form-control input-lg" type="text" name="email" required value="<?php echo set_value('email'); ?>"  />
</div>
<div class="form-group">
<label>First Name</label>
<input class="form-control input-lg" type="text" name="first_name" required value="<?php echo set_value('first_name'); ?>"  />
</div>
<div class="form-group">
<label>Last Name</label>
<input class="form-control input-lg" type="text" name="last_name" required value="<?php echo set_value('last_name'); ?>"  />
</div>
</div>
<div class="col-6 pull-right">
<div class="form-group">
<label>Password</label>
<input class="form-control input-lg" type="password" name="password" required value="<?php echo set_value('password'); ?>"  />
</div>
<div class="form-group">
<label>Password Confirm</label>
<input class="form-control input-lg" type="password" name="passconf" required value="<?php echo set_value('passconf'); ?>"  />
</div>
<div class="form-group">
<label>Secret Phrase</label>
<input class="form-control input-lg" type="text" name="secret_phrase" required value="<?php echo set_value('secret_phrase'); ?>"  />
</div>
<div class="form-group">
<label class="checkbox"></label>
<input type="checkbox" name="tos" required value="1" <?php echo set_checkbox('tos'); ?> /><a data-toggle="modal" href="#TOSModal"> I Agree to the Terms of Service</a>
</div>
<input type="submit" class="btn btn-large btn-warning" value="Register" />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>

<!-- Modal -->
  <div class="modal fade" id="TOSModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Terms of Service</h4>
        </div>
        <div class="modal-body">
          <p>Some Terms of Service... </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->