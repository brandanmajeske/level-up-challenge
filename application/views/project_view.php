<?php

$id = $data[0]['id'];
$title = $data[0]['title'];
$description = $data[0]['description'];

?>

<div class="row">
    <div class="span8">
        <h2><?php echo $title; ?></h2>
        <?php echo $description; ?>
    </div>
</div>