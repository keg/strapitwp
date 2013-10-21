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
		 	<header>
			 	<div class="page-header">
					<h1><?php bloginfo( 'name' ); ?> <small><?php bloginfo( 'description' ); ?></small></h1>
				</div>
		 	</header>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	
					<?php posted_on(); ?>
	
					<div class="entry">
						<?php the_content(); ?>
					</div>
	
					<footer class="postmetadata">
						<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
						<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> |
						<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
					</footer>
	
				</article>
	
			<?php endwhile; ?>
	
			<?php post_navigation(); ?>
	
			<?php else : ?>
	
				<h2><?php _e('Nothing Found','html5reset'); ?></h2>
	
			<?php endif; ?>
	 	</div><!-- end col-md-9 -->
		 	<aside class="col md-3" id="right-sidebar">
			 	<?php get_sidebar(); ?>
		 	</aside><!-- end col-md-3 -->
	 	</div><!-- end container -->
</div>

<?php get_footer(); ?>
