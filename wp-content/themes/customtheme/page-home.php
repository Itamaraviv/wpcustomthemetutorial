<?php
/**
 * Template Name: Home Page
 *
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
 
 get_header(); ?>
 <div class="jumbotron gradient-bg margin-neg-20">
    <div class="container text-center">
        <h1>Welcome To Our Custome Site</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="text-center"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>