<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2>A Single Blog Post</h2>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php endwhile ?>
<?php endif; ?>