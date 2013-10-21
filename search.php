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
                <?php if (have_posts()) : ?>

                <h2><?php _e('Search Results','html5reset'); ?></h2><?php post_navigation(); ?><?php while (have_posts()) : the_post(); ?>

                <article <?php post_class() ?> id="post-&lt;?php the_ID(); ?&gt;">
                    <h2><?php the_title(); ?></h2><?php posted_on(); ?>

                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>
                </article><?php endwhile; ?><?php post_navigation(); ?><?php else : ?>

                <h2><?php _e('Nothing Found','html5reset'); ?></h2><?php endif; ?>
            </div><!-- end col-md-9 -->

            <aside class="col md-3" id="right-sidebar">
                <?php get_sidebar(); ?>
            </aside><!-- end col-md-3 -->
        </div><!-- end container -->
    </div>
    <?php get_footer(); ?>

