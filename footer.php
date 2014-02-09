<?php $options = get_option( 'shadows_theme_settings' );  ?>

</div>
<!-- END main -->
    
<div id="footer-wrap">
<div id="footer">
<?php if ($options['disable_extended_footer'] != true) { ?>
	
	<div id="footer-widgets">
    		
	<div class="footer-widget">
       	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First Footer Area') ) : ?><?php endif; ?>
	</div>
    <!-- END footer-widget -->
    
    <div class="footer-widget">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second Footer Area') ) : ?><?php endif; ?>
	</div>
    <!-- END footer-widget -->
        
	<div class="footer-widget">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Area') ) : ?><?php endif; ?>
	</div>
    <!-- END footer-widget -->
        
	<div class="footer-widget">   
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth Footer Area') ) : ?><?php endif; ?>
	</div>
    <!-- END footer-widget -->
    	
        <div class="clear"></div>
        </div>
		<!-- END footer-widgets -->
<?php } ?>
</div>
<!-- END footer-wrap -->
    
<div id="footer-bottom-wrap">
<div id="footer-bottom">
            
<div id="copyright">
&copy; <?php echo date('Y'); ?>  <?php bloginfo( 'name' ) ?>
</div>
<!-- লোগো আরাম্ব --!>
<img src="http://www.gnu.org/graphics/gplv3-127x51.png" alt=""/>
<img src="http://www.debian.org/Pics/openlogo-50.png" alt=""/>
<img src="https://www.kernel.org/theme/images/logos/tux.png" alt=""/>
<img src="http://nginx.com/static/images/logos/nginx_200.png" alt=""/>
<!-- লোগো শেষ --!>

<!-- END copyright -->
    	
<div class="clear"></div>
</div>
<!-- END footer-bottom -->

</div>
<!-- END footer-bottom-wrap -->

</div>
<!-- END footer -->

<!-- WP Footer -->
<?php wp_footer(); ?>
</body>
</html>