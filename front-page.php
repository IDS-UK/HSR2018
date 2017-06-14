<?php
/*
Template Name: Home
This is the template used on the main site landing page
*/
get_header(); ?>

<div id="primary" class="content-area home">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content-home' );

        // End the loop.
        endwhile;

        // Previous/next page navigation.
        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'twentysixteen' ),
            'next_text'          => __( 'Next page', 'twentysixteen' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
        ) );

    // If no content, include the "No posts found" template.
    else :
        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    <article class="home-box">
        This is an article
    </article>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
