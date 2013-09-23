<h2>Search Results</h2>
<?php 
$err = isset($data['err']) ? $data['err'] : NULL; 
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
	echo "<div class='alert alert-danger'>$err</div>";
echo <<<EOT
	  <form class="navbar-form" method="post" action="">
	   <div class="input-group">
	      <input type="text" name="search_term" placeholder="Search..." class="form-control input-md" required>
	       <span class="input-group-btn">
	        <button class="btn btn-primary btn-md" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	      </span>
	    </div><!-- /input-group -->
	  </form>
EOT;
endif;
?>