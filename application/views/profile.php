<?php $error = isset($error)? $error :  null; ?>
<h2>Welcome <?php echo $user_data['username'];?></h2>

<div class="row">
<div class="span2 pull-right">
		
		<?php echo '<img class="thumbnail" src="'.base_url().'uploads/user_profile_img/'.$profile[0]['user_image'].'" />';?>
			<a href="#" id="profile_img">Edit Profile Image</a>
			<div id="profile_img_form">

			
			<?php echo form_open_multipart('userhome/do_upload'); ?>
			<input type="file" name="userfile" />
			<br />
			<input class="btn btn-small" type="submit" value="upload" />
			</form>
			</div>
		<?php echo "<p>Username: ".$profile[0]['username']."</p>";
			echo "<p>Name: ".$profile[0]['name']."</p>";
			echo "<p>Joined: ".$profile[0]['join_date']."</p>";
		?>
	</div>
<div class="span8">
<?php 
if(!is_null($error )){
	echo $error['error'];
	}
?>

	<h3 class="page-header">Public Profile</h3>
</div>
<div class="span8 pull-left">
<div id="bio">
<?php echo "<p><strong>Bio:</strong> <br />".$profile[0]['user_bio']."</p>"; ?>
<a href="#bio_edit" id="bio_edit">Edit</a>
</div>
<div id="bio_edit_form">
<?php 
$user = $user_data['username'];
$hidden = array('username' => $user);
echo form_open('userhome/editBio', '', $hidden); ?>
	<label><strong>Edit Bio:</strong><br />
	<textarea class="input-block-level" name="user_bio"><?php echo $profile[0]['user_bio']; ?></textarea></label>
	<input type="submit" class="btn" value="Update"/>
<?php echo form_close(); ?>
</div>
</div>
<div class="span8 pull-left">
<div id="interests">
<?php echo "<p><strong>Interests:</strong> <br />".$profile[0]['user_interests']."</p>"; ?>
<a href="#interests_edit" id="interests_edit">Edit</a>
</div>
<div id="interests_edit_form">
<?php 
$user = $user_data['username'];
$hidden = array('username' => $user);
echo form_open('userhome/editInterests', '', $hidden); ?>
	<label><strong>Edit Interests:</strong><br />
	<textarea class="input-block-level" name="user_interests"><?php echo $profile[0]['user_interests']; ?></textarea></label>
	<input type="submit" class="btn" value="Update"/>
<?php echo form_close(); ?>
</div>
</div>
</div>