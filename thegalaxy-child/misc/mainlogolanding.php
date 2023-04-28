<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div id="logo_main">';
					                
	if ( get_theme_mod( 'themeslug_logo_2' ) ) :
			
		echo '<a id="logo_primary" href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home"><img src="';
		
		echo esc_url( get_theme_mod( 'themeslug_logo' ) );
		
		echo '" alt="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '"></a>';
		
		echo '<a id="logo_alt" href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home"><img src="';
		
		echo esc_url( get_theme_mod( 'themeslug_logo_2' ) );
		
		echo '" alt="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '"></a>';
		
	elseif ( get_theme_mod( 'themeslug_logo' ) ) :
	
		echo '<a href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home"><img src="';
		
		echo esc_url( get_theme_mod( 'themeslug_logo' ) );
		
		echo '" alt="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '"></a>';
			    
	else :
			
		echo '<h1 class="site-title"><a href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home">';
		
		bloginfo( 'name' );
		
		echo '</a></h1>';
			    
	endif;
				
	echo '</div>';
	
?>