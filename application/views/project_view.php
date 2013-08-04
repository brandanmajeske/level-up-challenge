<?php
$id = $data[0]['id'];
$title = $data[0]['title'];
$description = $data[0]['description'];
$username = strtolower($data[0]['username']);
$current_user = strtolower($this->session->userdata('username'));
?>
<div class="row">
    <div class="span8">
        <h2><?php echo $title; ?></h2>
        <?php echo $description; ?>
    </div>
</div>
<div>
    <?php
    if($current_user == $username) :
        echo "<a href=".base_url().'projects/edit/'.$id." class='btn'>Edit</a>";
    else:
        echo 'they do not match';
    endif;
    ?>
</div>
