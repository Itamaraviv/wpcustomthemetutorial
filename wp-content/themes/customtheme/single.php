<?php
/**
 * The template for displaying posts
 *
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
 
 get_header(); ?>
<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2>A Single Blog Post</h2>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile ?>
    <?php endif; ?>
    
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>