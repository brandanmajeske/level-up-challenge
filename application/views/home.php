<h2>This is the home page where home-stuff happens</h2>

<!-- Latest Projects -->

<?php 

echo '<h3>This is where the projects live, get you some!</h3>';
//echo '<pre>',print_r($data, true),'</pre>'; 

for($i = 0; $i < 5; $i++){
	echo '<pre>',print_r($data[$i], true),'</pre>'; 
}

?>