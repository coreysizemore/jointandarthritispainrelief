<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('home_logo', 'options') == 'image'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
					                
		if ( get_theme_mod( 'themeslug_logo_3' ) ) :
				
			echo '<img src="';
			
			echo esc_url( get_theme_mod( 'themeslug_logo_3' ) );
			
			echo '" alt="';
			
			echo esc_attr( get_bloginfo( 'name', 'display' ) );
			
			echo '">';
			
		endif;
		
		if( get_field('home_navigation_style', 'options') == 'default'):
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				echo '<nav id="home_page_nav">';
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
		echo '</div>';
		
		if( get_field('home_navigation_style', 'options') == 'bottom' || get_field('home_navigation_style', 'options') == 'top' ):
			
			$menu = wp_get_nav_menu_object( 'home' );
				
			$menuitems = $menu->count;
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				if( get_field('home_navigation_style', 'options') == 'top' ):
			
					echo '<nav id="top_home_page_nav" class="menu-items-' . $menuitems . '">';
				
				elseif( get_field('home_navigation_style', 'options') == 'bottom' ):
				
					echo '<nav id="bottom_home_page_nav" class="menu-items-' . $menuitems . '">';
					
				endif;
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
	elseif( get_field('home_logo', 'options') == 'imagetext'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if ( get_theme_mod( 'themeslug_logo_3' ) ) :
				
			echo '<img src="';
			
			echo esc_url( get_theme_mod( 'themeslug_logo_3' ) );
			
			echo '" alt="';
			
			echo esc_attr( get_bloginfo( 'name', 'display' ) );
			
			echo '">';
			
		endif;
		
		if( get_field('home_logo_text', 'options')):
		
			echo '<div id="home_logo_text_wrapper">';
		
				echo the_field('home_logo_text', 'options');
			
			echo '</div>';
			
		endif;
		
		if( get_field('home_navigation_style', 'options') == 'default'):
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				echo '<nav id="home_page_nav">';
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
		echo '</div>';
		
		if( get_field('home_navigation_style', 'options') == 'bottom' || get_field('home_navigation_style', 'options') == 'top' ):
			
			$menu = wp_get_nav_menu_object( 'home' );
				
			$menuitems = $menu->count;
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				if( get_field('home_navigation_style', 'options') == 'top' ):
			
					echo '<nav id="top_home_page_nav" class="menu-items-' . $menuitems . '">';
				
				elseif( get_field('home_navigation_style', 'options') == 'bottom' ):
				
					echo '<nav id="bottom_home_page_nav" class="menu-items-' . $menuitems . '">';
					
				endif;
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
	
	elseif( get_field('home_logo', 'options') == 'text'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if( get_field('home_logo_text', 'options')):
		
			echo '<div id="home_logo_text_wrapper">';
		
				echo the_field('home_logo_text', 'options');
			
			echo '</div>';
			
		endif;
		
		if( get_field('home_navigation_style', 'options') == 'default'):
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				echo '<nav id="home_page_nav">';
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
		echo '</div>';
		
		if( get_field('home_navigation_style', 'options') == 'bottom' || get_field('home_navigation_style', 'options') == 'top' ):
			
			$menu = wp_get_nav_menu_object( 'home' );
				
			$menuitems = $menu->count;
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				if( get_field('home_navigation_style', 'options') == 'top' ):
			
					echo '<nav id="top_home_page_nav" class="menu-items-' . $menuitems . '">';
				
				elseif( get_field('home_navigation_style', 'options') == 'bottom' ):
				
					echo '<nav id="bottom_home_page_nav" class="menu-items-' . $menuitems . '">';
					
				endif;
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
	else :
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if( get_field('home_navigation_style', 'options') == 'default'):
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				echo '<nav id="home_page_nav">';
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
		
		echo '</div>';
		
		if( get_field('home_navigation_style', 'options') == 'bottom' || get_field('home_navigation_style', 'options') == 'top' ):
			
			$menu = wp_get_nav_menu_object( 'home' );
				
			$menuitems = $menu->count;
		
			if ( has_nav_menu( 'home_page_nav' ) ):
			
				if( get_field('home_navigation_style', 'options') == 'top' ):
			
					echo '<nav id="top_home_page_nav" class="menu-items-' . $menuitems . '">';
				
				elseif( get_field('home_navigation_style', 'options') == 'bottom' ):
				
					echo '<nav id="bottom_home_page_nav" class="menu-items-' . $menuitems . '">';
					
				endif;
						
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
						
				echo '</nav>';
			
			endif;
		
		endif;
	
	endif;
	
?>