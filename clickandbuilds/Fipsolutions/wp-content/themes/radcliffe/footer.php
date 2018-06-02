<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b') || is_active_sidebar( 'footer-c' ) ) : ?>

	<div class="footer section medium-padding bg-graphite">
			
		<div class="section-inner row">
		
			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
				<div class="column column-1 one-third">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-a' ); ?>
											
					</div>
					
				</div>
				
			<?php endif; ?><!-- .footer-a -->
				
			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
			
				<div class="column column-2 one-third">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-b' ); ?>
											
					</div><!-- .widgets -->
					
				</div>
				
			<?php endif; ?><!-- .footer-b -->
								
			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
			
				<div class="column column-3 one-third">
			
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-c' ); ?>
											
					</div><!-- .widgets -->
					
				</div>
				
			<?php endif; ?><!-- .footer-c -->
			
			<div class="clear"></div>
		
		</div><!-- .footer-inner -->
	
	</div><!-- .footer -->

<?php endif; ?>

<div class="credits section light-padding">

	<div class="credits-inner section-inner">
	
		<p class="fleft">
		
			&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		
		</p>
		
		<p class="fright-bottom">
            <a href="https://www.facebook.com/philguenter" target="_blank" class="social-facebook" title="Philipp Günter bei Facebook">
                <i class="fab fa-facebook-f social-facebook"></i></a>
            <a href="https://www.instagram.com/fipsolutions/" target="_blank" class="social-insta" title="Philipp Günter bei Instagram">
                <i class="fab fa-instagram social-insta"></i></a>
            <a href="https://www.xing.com/profile/Philipp_Guenter2/cv?sc_o=mxb_p" target="_blank" class="social-xing" title="Philipp Günter bei XING">
                <i class="fab fa-xing social-xing"></i></a>
		</p>
		
		<div class="clear"></div>
		
	</div><!-- .credits-inner -->

</div><!-- .credits -->

<?php wp_footer(); ?>

</body>
</html>