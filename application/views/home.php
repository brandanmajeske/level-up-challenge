<h2>Level-Up Challenge's Latest Projects</h2>

<!-- Latest Projects -->

<?php 

echo '<h3>This is where the projects live, get you some!</h3>';
echo '<pre>',print_r($data, true),'</pre>'; 
?>

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
			<p class=""><?php echo substr($data[$i]['description'], 0, 250);?> <a href="<?php echo base_url().'projects/view/'.$data[$i]['id'];?>"> <em> SEE MORE <span class="glyphicon glyphicon-arrow-right"></span></em></a></p>
			<img src="<?php echo base_url(). 'uploads/user_profile_img/'.$data[$i]['user_image']; ?>" class="pull-left col-2 img-thumbnail" alt="user-img"/>
			<div class="clearfix"></div>
			<?php echo "<p class='muted'><em>Author: ".$data[$i]['username']."<br />"."Published On: </em></p>";?>
					
			
			
		  			</div>

<?php 
} 
else: 
	echo "<h4 class='alert alert-info'>No projects to display</h4>";
endif;
?>