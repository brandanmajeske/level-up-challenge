$(document).ready(function(){
    // TinyMCE Text Editor 
    tinymce.init({selector:'textarea'});

    // Sidemenu Follow-script
        $('#sidebox').jfollow('#sidefollow', 20);

	// Public User Profile updates
	$('#bio_edit_form').hide();
	$('#interests_edit_form').hide();
	$('#profile_img_form').hide();

	$('#bio_edit').click(function(){
		$('#bio').hide();
		$('#bio_edit_form').show();
	});

	$('#interests_edit').click(function(){
		$('#interests').hide();
		$('#interests_edit_form').show();
	});

	$('#profile_img').click(function(){
		$('#profile_img').hide();
		$('#profile_img_form').show();
	});

});