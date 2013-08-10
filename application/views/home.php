<h2>Level-Up Challenge's Latest Projects</h2>
<div class="row">
<!-- Latest Projects -->
<div class="content col-9 visible-lg pull-left">
<?php 
if(isset($data[0]['title'])) :
	if(count($data) < 5):
		$j = count($data);
	else :
		$j = 5;
	endif;
	for($i = 0; $i<$j; $i++){ ?>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2class="panel-title"><?php echo $data[$i]['title'];?></h2>
		</div>
			<span class="col-10 pull-right">
				<p class=""><?php echo substr($data[$i]['description'], 0, 250);?><div class="clearfix"></div><a class="btn btn-primary btn-sm pull-left" href="<?php echo base_url().'projects/view/'.$data[$i]['id'];?>"> <em> SEE MORE <span class="glyphicon glyphicon-arrow-right"></span></em></a></p>
			</span>
			<img src="<?php echo base_url(). 'uploads/user_profile_img/'.$data[$i]['user_image']; ?>" class="pull-left col-2 img-thumbnail" alt="user-img"/>
			<div class="clearfix"></div>
			<?php echo "<p class='text-muted'><em>Author: ".$data[$i]['username']."<br />"."Published:".$data[$i]['published']."</em></p>";?>
			</div>

<?php 
} 
else: 
	echo "<h4 class='alert alert-info'>No projects to display</h4>";
endif;
?>
</div>
<div class="content col-12 hidden-lg">
<?php 
if(isset($data[0]['title'])) :
	if(count($data) < 5):
		$j = count($data);
	else :
		$j = 5;
	endif;
	for($i = 0; $i<$j; $i++){ ?>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2class="panel-title"><?php echo $data[$i]['title'];?></h2>
		</div>
			<span class="col-10 pull-right">
				<p class=""><?php echo substr($data[$i]['description'], 0, 250);?><div class="clearfix"></div><a class="btn btn-primary btn-sm pull-left" href="<?php echo base_url().'projects/view/'.$data[$i]['id'];?>"> <em> SEE MORE <span class="glyphicon glyphicon-arrow-right"></span></em></a></p>
			</span>
			<img src="<?php echo base_url(). 'uploads/user_profile_img/'.$data[$i]['user_image']; ?>" class="pull-left col-2 img-thumbnail" alt="user-img"/>
			<div class="clearfix"></div>
			<?php echo "<p class='text-muted'><em>Author: ".$data[$i]['username']."<br />"."Published On: </em></p>";?>
			</div>

<?php 
} 
else: 
	echo "<h4 class='alert alert-info'>No projects to display</h4>";
endif;
?>
</div>
<!-- Search Box -->
<div class="col-3 pull-left visible-lg">
<div id="sidefollow" style="height: 0;" class="pull-left"></div>
  <div id="sidebox" style="width: 16.250em;" class="pull-left">  
  <form class="navbar-form" method="post" action="<?php echo base_url().'projects/search';?>">
   <div class="input-group">
      <input type="text" name="search_term" placeholder="Search..." class="form-control input-md" required>
       <span class="input-group-btn">
        <button class="btn btn-primary btn-md" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div><!-- /input-group -->
  </form>
  <h3>Some Sfuff</h3>
  <ul>
  	<li>Line Item</li>
  	<li>Line Item</li>
  	<li>Line Item</li>
  </ul>
  </div>
  </div>
  </div>
</div> <!-- end row -->