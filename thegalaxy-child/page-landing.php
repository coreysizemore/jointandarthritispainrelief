<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Landing
	*/
	
	get_header();

	//get_template_part( 'headers/header', 'page' );
	
	//get_template_part( 'mains/main', 'protected' );
	
	if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'inside' ):
			
		get_template_part( 'custom/customelements' );
	
	elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'inside' ):
		
		get_template_part( 'custom/customelements2' );
		
	elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'inside' ):
		
		get_template_part( 'custom/customelements3' );
				
	endif;
	
	get_footer();

?>