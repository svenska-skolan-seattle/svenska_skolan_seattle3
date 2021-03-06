<?php
	global $post;
	theme_post_wrapper(
		array(
				'id' => theme_get_post_id(), 
				'class' => theme_get_post_class(),
				'title' => theme_get_meta_option($post->ID, 'theme_show_post_title') ? get_the_title() : '',  
				'before' => theme_get_metadata_icons('date', 'header'),
				'content' => theme_get_content(),
				'after' => theme_get_metadata_icons('', 'footer')
		)
	);
?>