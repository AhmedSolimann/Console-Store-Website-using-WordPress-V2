<?php if( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
  <div id="content-footer-section" class="row clearfix">    				
    <?php
      // Calling the header sidebar if it exists.
      dynamic_sidebar( 'maxstore-footer-area' );
    ?>  				
  </div>		
<?php } ?>         
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
  <div class="row rsrc-author-credits">                    
    <p class="text-center">
			<?php Echo "<a href='/fatherofshipping/faq/'>FAQ</a>"?>
			<span class="sep"> | </span>
			<?php Echo "<a href='/fatherofshipping/contact-us/'>Contact Us</a>"?>
			<?php echo '<br />'?>
			<?php echo '<br />'?>
			<?php echo '<br />'?>
			<?php printf( __( 'Proudly powered by %s', 'online-store' ), '<a href="' . esc_url( __( 'https://wordpress.org/', 'online-store' ) ) . '">WordPress</a>' ); ?>

		</p>                
  </div>    
</footer>
<div id="back-top">  
  <a href="#top">
    <span></span>
  </a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>