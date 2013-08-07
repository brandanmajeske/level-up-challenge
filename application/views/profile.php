<?php $error = isset($error)? $error :  null; ?>

<div class="row">
<div class="col-2 pull-right">
		
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
<div class="col-8">
<?php 
if(!is_null($error )){
	echo $error['error'];
	}
?>
	<h3 class="page-header"><?php echo ucfirst($user_data['username']);?>'s Public Profile</h3>
</div>
<div class="col-8 pull-left">
<div id="bio">
<?php echo "<h4>Bio:</h4><p>".$profile[0]['user_bio']."</p>"; ?>
<a href="#bio_edit" id="bio_edit" class="edit-link">Edit</a>
</div>
<div id="bio_edit_form">
<?php 
$user = $user_data['username'];
$hidden = array('username' => $user);
echo form_open('userhome/editBio', '', $hidden); ?>
<fieldset>
	<div class="form-group">
	<label><strong>Edit Bio:</strong><br />
	<textarea class="input-block-level" name="user_bio"><?php echo $profile[0]['user_bio']; ?></textarea></label>
	</div>
	<input type="submit" class="btn btn-primary" value="Update"/>
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
<div class="col-8 pull-left">
<div id="interests">
<?php echo "<h4>Interests:</h4><p>".$profile[0]['user_interests']."</p>"; ?>
<a href="#interests_edit" id="interests_edit" class="edit-link">Edit</a>
</div>
<div id="interests_edit_form">
<?php 
$user = $user_data['username'];
$hidden = array('username' => $user);
echo form_open('userhome/editInterests', '', $hidden); ?>
<fieldset>
	<div class="form-group">
	<label><strong>Edit Interests:</strong><br />
	<textarea class="input-block-level" name="user_interests"><?php echo $profile[0]['user_interests']; ?></textarea></label>
	</div>
	<input type="submit" class="btn btn-primary" value="Update"/>
</fieldset>
<?php echo form_close(); ?>
</div>
<div clas="col-8 pull-left">
	<a class="btn btn-small pull-right" href="<?php echo base_url().'projects';?>">Add New</a>
	<h3 class="page-header">Projects</h3>
	<?php 

		if(!empty($projects)){
			foreach($projects as $project){
			echo '<div class="row">';
			echo '<div class="col-8 project">';

			$title = $project['title'];
            $id = $project['id'];
			$description = substr($project['description'],0,150).'... <a href="'.base_url().'projects/view/'.$id.'"><em class="muted">more <i class="icon-arrow-right"></i></em></a>';

			echo "<h4>$title</h4>";
			echo "<p>$description</p>";
			echo '</div>';
			echo '</div>';
			}
		} else {
			echo '<div class="row">';
			echo '<div class="col-8">';
			echo "<h4>Add a new project</h4>";
			echo '</div>';
			echo '</div>';
		}
		

	?>

</div>
</div>
</div>
