<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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