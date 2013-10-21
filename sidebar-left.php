<?php
/**
 * @package WordPress
 * @subpackage DFM-Strapit-Theme
 * @since Strapit 1.0
 */
?>
 <div id="left-sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Left Sidebar')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
    
    	<h2><?php _e('Archives','html5reset'); ?></h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>            
    	
    	<h2><?php _e('Subscribe','html5reset'); ?></h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','html5reset'); ?></a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','html5reset'); ?></a></li>
    	</ul>
	
	<?php endif; ?>

</div>