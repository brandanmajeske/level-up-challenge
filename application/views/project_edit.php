<?php
/*
 * View for project editing
 */
$id = $data[0]['id'];
$title = $data[0]['title'];
$description = $data[0]['description'];
?>
<h2>Edit Project:</h2>
<div id="project_edit_form">
    <?php

    $hidden = array('id' => $id);
    echo form_open('projects/update', '', $hidden); ?>
    <fieldset>
    <div class="field-group">
    <label><strong>Edit Title:</strong><br />
        <input type="text" class="form-control input-lg" required name="title" value="<?php echo $title; ?>"/>
    </label>
    </div>
    <div class="field-group">
    <label><strong>Edit Description:</strong><br />
        <textarea rows="10" class="form-control input-lg" required name="description"><?php echo $description ?></textarea>
    </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Update"/>
    <a href="<?php echo base_url().'projects/delete/'.$id; ?>" onclick="alert('You are about to delete a project...');" class="btn btn-danger">Delete</a>
    </fieldset>
    <?php echo form_close(); ?>



</div>

