<?php
	
	if( have_rows('skeleton_items') ):
	
		// Desktop Version
	
		echo '<div id="skeleton_wrapper" class="desktop"><div class="container"><div class="row gutters"><div class="col_12"><div class="skeleton_heading"><h1><strong>Areas</strong> We Treat</h1></div></div></div><div class="row gutters"><div class="col_3"><div class="link_items">';
		
		echo '<nav><ul>';
	
		while ( have_rows('skeleton_items') ) : the_row();

			$class = get_sub_field('item_class');
			$heading = get_sub_field('heading');
			
			if (!empty($heading)):
			
				echo '<li class="' . $class . '">';
			
				echo '<span>' . $heading . '</span>';
				
				echo '</li>';
			
			endif;
		
		endwhile;
		
		echo '</ul></nav>';
		
		echo '</div></div><div class="col_6"><div class="skeleton">';
		
		while ( have_rows('skeleton_items') ) : the_row();
		
			$class = get_sub_field('item_class');
		
			echo '<span class="' . $class . '"></span>';
		
		endwhile;
		
		echo '</div></div><div class="col_3"><div class="skeleton_description">';
		
		while ( have_rows('skeleton_items') ) : the_row();
		
			$class = get_sub_field('item_class');
			$description = get_sub_field('description');
			$link = get_sub_field('page_link');
			$heading = get_sub_field('heading');
		
			echo '<span class="' . $class . '">';
			
			echo '<h3>' . $heading . '</h3>';
			
			echo $description;
			
			echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			echo '</span>';
		
		endwhile;
		
		echo '</div></div></div></div></div>';
		
		// Mobile Version
		
		echo '<div id="skeleton_wrapper" class="mobile"><div class="container"><div class="row gutters"><div class="col_12"><div class="skeleton_heading"><h1><strong>Areas</strong> We Treat</h1></div></div></div><div class="row gutters"><div class="col_6"><div class="link_items">';
		
		echo '<nav><ul>';
	
		while ( have_rows('skeleton_items') ) : the_row();

			$class = get_sub_field('item_class');
			$heading = get_sub_field('heading');
			
			if (!empty($heading)):
			
				echo '<li class="' . $class . '">';
			
				echo '<span>' . $heading . '</span>';
				
				echo '</li>';
			
			endif;
		
		endwhile;
		
		echo '</ul></nav>';
		
		echo '</div></div><div class="col_6"><div class="skeleton_description">';
		
		while ( have_rows('skeleton_items') ) : the_row();
		
			$class = get_sub_field('item_class');
			$description = get_sub_field('description');
			$link = get_sub_field('page_link');
			$heading = get_sub_field('heading');
		
			echo '<span class="' . $class . '">';
			
			echo '<h3>' . $heading . '</h3>';
			
			echo $description;
			
			echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			echo '</span>';
		
		endwhile;
		
		echo '</div></div></div></div></div>';
	
	endif;
	
	if( have_rows('home_blocks') ):
	
	echo '<div id="home_blocks_wrapper"><div class="container"><div class="row gutters"><div class="col_12"><div class="home_blocks">';
	
		echo '<h1><strong>Our</strong> Philosophy</h1>';
		
		echo '<p>Joint and Arthritis Pain Relief is a team of medical professionals who specialize in treating acute and chronic injuries of the spine, neck, shoulder, knee, hip, and extremity. Our mission is to provide expert healthcare through a patient focused clinical integration and the support of highly effective professionals. We believe there are three parts to providing expert care to our patients.</p>';
	
		while ( have_rows('home_blocks') ) : the_row();
		
			$heading = get_sub_field('heading');
			$description = get_sub_field('description');
			$icon = get_sub_field('icon');
			
			echo '<div class="block">';
			
			if (!empty($icon)):
			
				echo '<span class="icon">' . $icon . '</span>';
			
			endif;
			
			if (!empty($heading)):
			
				echo '<h3>' . $heading . '</h3>';
			
			endif;
			
			if (!empty($description)):
			
				echo '<p>' . $description . '</p>';
			
			endif;
			
			echo '</div>';
		
		endwhile;
		
	echo '</div></div></div></div></div>';
	
	endif;
		
?>