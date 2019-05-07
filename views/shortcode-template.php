<?php
	global $wpdb;
	$all_sliders = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM wp_basliders WHERE id = 3","" ) );

			?>
			<div class="container" style="max-width: 700px;">
			<h1>Before and After Sadang</h1>
				<div class="cocoen">
					<img src="<?php echo $all_sliders->before_image; ?>" alt="">
					<img src="<?php echo $all_sliders->after_image; ?>" alt="">
				</div>
			</div>
			<?php

?>

<script>
	document.addEventListener('DOMContentLoaded', function(){
		new Cocoen();
	});
</script>
