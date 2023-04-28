<?php
	
	if( get_field('navigation_location', 'options') == 'top' ):
	
		if( get_field('navigation_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="nav_bar" class="top_navigation full_width">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				get_template_part( 'misc/mainlogo' );
				
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
			
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div>';
		
		elseif( get_field('navigation_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="nav_bar" class="top_navigation container_width"><div class="container"><div class="row gutters"><div class="col_12">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div></div></div></div>';
			
		endif;
	
	elseif( get_field('navigation_location', 'options') == 'bottom' ):
	
		if( get_field('navigation_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="nav_bar" class="bottom_navigation full_width">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
			
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div>';
		
		elseif( get_field('navigation_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="nav_bar" class="bottom_navigation container_width"><div class="container"><div class="row gutters"><div class="col_12">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				get_template_part( 'misc/mainlogo' );
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div></div></div></div>';
			
		endif;
	
	elseif( get_field('navigation_location', 'options') == 'full' ):
	
		if( get_field('navigation_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="nav_bar" class="full_navigation full_width">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				if( get_field('navigation_logo_location', 'options') == 'left' ):
				
					echo '<div class="nav_logo_left">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				elseif( get_field('navigation_logo_location', 'options') == 'right' ):
				
					echo '<div class="nav_logo_right">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				else :
				
					echo '<div class="nav_logo_center">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				endif;
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				if( get_field('navigation_logo_location', 'options') == 'left' ):
				
					echo '<div class="nav_logo_left">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				elseif( get_field('navigation_logo_location', 'options') == 'right' ):
				
					echo '<div class="nav_logo_right">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				else :
				
					echo '<div class="nav_logo_center">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				endif;
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
			
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div>';
		
		elseif( get_field('navigation_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="nav_bar" class="full_navigation container_width"><div class="container"><div class="row gutters"><div class="col_12">';
			
			if( get_field('navigation_bar_logo', 'options') == 'display' && get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo include_sm">';
				
				if( get_field('navigation_logo_location', 'options') == 'left' ):
				
					echo '<div class="nav_logo_left">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				elseif( get_field('navigation_logo_location', 'options') == 'right' ):
				
					echo '<div class="nav_logo_right">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				else :
				
					echo '<div class="nav_logo_center">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				endif;
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			elseif( get_field('navigation_bar_logo', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_logo">';
				
				if( get_field('navigation_logo_location', 'options') == 'left' ):
				
					echo '<div class="nav_logo_left">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				elseif( get_field('navigation_logo_location', 'options') == 'right' ):
				
					echo '<div class="nav_logo_right">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				else :
				
					echo '<div class="nav_logo_center">';
				
					get_template_part( 'misc/mainlogo' );
					
					echo '</div>';
				
				endif;
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav>';
					
				echo '</div>';
				
			elseif( get_field('navigation_bar_social_media', 'options') == 'display' ):
			
				echo '<div id="nav_menu" class="include_sm">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav><nav id="social_nav">';
				
				echo get_template_part( 'misc/sociallinks' );
					
				echo '</nav></div>';
				
			else :
			
				echo '<div id="nav_menu">';
					
				if( get_field('navigation_bar_arrows', 'options') == 'dark' ):
					
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_light_bg scroll_nav_dark_bg">';
						
					endif;
					
				else :
				
					if( get_field('scrolling_navigation_bar_arrows', 'options') == 'dark' ):
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_light_bg">';
						
					else : 
					
						echo '<nav id="primary_nav" class="nav_dark_bg scroll_nav_dark_bg">';
						
					endif;
				
				endif;
			
				//wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
					
				echo '</nav></div>';
			
			endif;
			
			echo '</div></div></div></div>';
			
		endif;
	
	endif;
	
?>