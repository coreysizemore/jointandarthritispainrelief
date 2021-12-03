<?php
	
	if( have_rows('service_blocks') ):

		echo '<div id="service_blocks_wrapper">';
				
		while ( have_rows('service_blocks') ) : the_row();
			
			$heading = get_sub_field('heading');
			$desc = get_sub_field('description');
			$link = get_sub_field('link');
			
			echo '<div class="service_block">';
			
			echo '<h3>' . $heading . '</h3>';
			
			echo '<p>' . $desc . '</p>';
			
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>