<?php
/**
 * @package WordPress
 * @subpackage DFM-Strapit-Theme
 * @since Strapit 1.0
 */
get_header(); ?>
	<div class="row">
	
	        <div class="container">
	            <div class="col md-9" role="content">
	                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	                <article class="post" id="post-&lt;?php the_ID(); ?&gt;">
	                    <h2><?php the_title(); ?></h2><?php posted_on(); ?>
	
	                    <div class="entry">
	                        <?php the_content(); ?><?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
	                    </div><?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>
	                </article><?php comments_template(); ?><?php endwhile; endif; ?>
	            </div><!-- end col-md-9 -->
	
	            <aside class="col md-3" id="right-sidebar">
	                <?php get_sidebar(); ?>
	            </aside><!-- end col-md-3 -->
	            
	        </div><!-- end container -->
	        
	</div>
    <?php get_footer(); ?>