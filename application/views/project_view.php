<?php
$id = $data[0]['id'];
$title = $data[0]['title'];
$description = $data[0]['description'];
$username = strtolower($data[0]['username']);
$current_user = strtolower($this->session->userdata('username'));
?>
<div class="row">
    <div class="col-8">
        <h2><?php echo $title; ?></h2>
        <?php echo $description; ?>
    </div>
</div>
<div>
    <?php
    if($current_user == $username) :
        echo "<a href=".base_url().'projects/edit/'.$id." class='btn btn-primary'><span class=\"glyphicon glyphicon-edit\"></span> Edit</a>";
    endif;
    ?>
</div>
<!-- COMMENTS HERE -->
<?php echo '<h4>Leave a comment!</h4>'; ?>

 <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'levelupchallenge'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    