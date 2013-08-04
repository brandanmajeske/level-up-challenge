<?php

/*
 * View for project editing
 *
 *
 *
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
    <label><strong>Edit Title:</strong><br />
        <input type="text" class="input-block-level" required name="title" value="<?php echo $title; ?>"/>
    </label>

    <label><strong>Edit Description:</strong><br />
        <textarea rows="10" class="input-block-level" required name="description"><?php echo $description ?></textarea>
    </label>

    <input type="submit" class="btn" value="Update"/>
    <?php echo form_close(); ?>
</div>

