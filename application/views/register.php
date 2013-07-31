<h2>Register</h2>

<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('register/validate'); ?>

<label>Username</label>
<input type="text" name="username" value="<?php echo set_value('username'); ?>"  />

<label>Email Address</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>"  />

<label>First Name</label>
<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>"  />

<label>Last Name</label>
<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>"  />

<label>Password</label>
<input type="password" name="password" value="<?php echo set_value('password'); ?>"  />

<label>Password Confirm</label>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>"  />

<label class="checkbox">
<input type="checkbox" name="tos" value="1" <?php echo set_checkbox('tos'); ?> /><a href="#TOSModal" data-toggle="modal">I Agree to the Terms of Service</a>
</label>
<input type="submit" class="btn btn-large btn-warning" value="Register" />
<?php echo form_close(); ?>


<div id="TOSModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="TOSModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="ModalLabel">Terms of Service</h3>
  </div>
  <div class="modal-body">
    	<p>The Terms of Service are simple: Be kind to all, don't raise a ruckus, and keep the content 'family-friendly'! Our grandmothers use this site and if you upset Mamaw, we'll certainly hear about it, and you'll be in trouble. The administrators reserve the right to remove content as they see fit, however the offending post in question will be reviewed, and the post-owner can dispute the removal. If it was all a silly misunderstanding the content will be returned to its original condition.</p>

		<p>The goal of Level-Up Challenge is to share your experiences and ideas that are interesting, thought provoking, and enhance our users lives in some way. Please share content with that goal in mind.</p>

		<p>We're going out on a limb here and assuming the content posted by you is your intellectual property. We're trusting you here, please don't post content that doesn't belong to you unless you have express permission by the copywrite holder. Violating this rule may result in banishment from the land. There, you've been warned. Now, for those sad individuals that are tempted to steal work from others: Don't do it here! The consequences aren't pretty. In addition to contracting parasitic worms in your intestines, you'll be banished from the land AND shot into space. Stealing is <em>that</em> uncool!</p>
  </div>
  <div class="modal-footer">
    
  </div>
</div>