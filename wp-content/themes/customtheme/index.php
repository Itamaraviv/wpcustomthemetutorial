<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <style>
            .jumbotron {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2a97e0+25,7db9e8+100 */
                background: #1e5799; /* Old browsers */
                background: -moz-linear-gradient(left,  #1e5799 0%, #2a97e0 25%, #7db9e8 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left,  #1e5799 0%,#2a97e0 25%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right,  #1e5799 0%,#2a97e0 25%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 */
                color: white;
            }
        </style>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Welcome To Our Custome Site</h1>
            </div>
        </div>
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2>A Single Blog Post</h2>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                <?php endwhile ?>
            <?php endif; ?>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>