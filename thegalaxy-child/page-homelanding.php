<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Home Landing
	*/
	
	get_header();

	get_template_part( 'headers/header', 'homelanding' );
	
	get_template_part( 'mains/main', 'home' );
	
	get_template_part( 'footer-landing' );
	
	//get_footer(); 

?>