<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

<!-- Bootrap, Fontawesome & Google Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

<!-- Google Analytics -->
        <meta name="google-site-verification" content="HPTr8-5Utw5zsqM_3zi1KbXldnrE36dKxLQb8pC-T1I" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119979966-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-119979966-1');
        </script>
		<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="header-search-block section light-padding hidden">
		
			<div class="section-inner">
			
				<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" placeholder="<?php _e( 'Type and press enter', 'radcliffe' ); ?>" name="s" id="s" />
				</form>
			
			</div>
		
		</div>
	
		<div class="header section light-padding">
		
			<div class="header-inner section-inner">
			
				<?php if ( get_theme_mod( 'radcliffe_logo' ) ) : ?>
					
				        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'radcliffe_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>
			
				<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
			
					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>
					
				<?php endif; ?>
				
				<div class="nav-toggle">
				
					<p><?php _e( 'Menu', 'radcliffe' ); ?></p>
				
					<div class="bars">
					
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
						
						<div class="clear"></div>
					
					</div>
				
				</div>
		
				<ul class="main-menu fright">
					
					<?php if ( has_nav_menu( 'primary' ) ) {

						$menu_args = array( 
							'container' 		=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary'
						);

						wp_nav_menu( $menu_args ); 
					
					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> ''
						);
					
						wp_list_pages( $list_pages_args );
						
					} ?>
					

						
				 </ul>
				
				<div class="clear"></div>
			
			</div><!-- .header -->
			
		</div><!-- .header.section -->
		
		<div class="mobile-menu-container hidden">
		
			<ul class="mobile-menu">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( $menu_args ); 
					
					} else {
					
						wp_list_pages( $list_pages_args );
						
					} ?>
					
			 </ul>
			 

			 
		</div><!-- .mobile-menu-container -->