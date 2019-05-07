jQuery(document).ready(function($){

	var mediaUploader;

	jQuery('#before-input').click(function(e) {

		e.preventDefault();
		
		// Extend the wp.media object
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
			}, multiple: false });

		// When a file is selected, grab the URL and set it as the text field's value
		mediaUploader.on('select', function() {
			attachment = mediaUploader.state().get('selection').first().toJSON();
			//alert(attachment.url);
			jQuery('#before-input').attr('value',attachment.url);
			jQuery('#before-preview').remove();
			jQuery('<p id="before-preview"><img src="'+attachment.url+'" style="width:100px;"/><p>').insertAfter('#before-input');
			//jQuery('#new-image-attachment-id').val(attachment.url);
		});
		// Open the uploader dialog
		mediaUploader.open();
	});
	
	
	jQuery('#after-input').click(function(e) {

		e.preventDefault();
		
		// Extend the wp.media object
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
			}, multiple: false });

		// When a file is selected, grab the URL and set it as the text field's value
		mediaUploader.on('select', function() {
			attachment = mediaUploader.state().get('selection').first().toJSON();
			//alert(attachment.url);
			jQuery('#after-input').attr('value',attachment.url);
			jQuery('#after-preview').remove();
			jQuery('<p id="after-preview"><img src="'+attachment.url+'" style="width:100px;"/><p>').insertAfter('#after-input');
			
		});
		// Open the uploader dialog
		mediaUploader.open();
	});
	
});