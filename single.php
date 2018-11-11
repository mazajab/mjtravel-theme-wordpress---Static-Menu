<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
			 ?>
			 <div class="blog-post container">
			 <h2 class="blog-post-title" style="margin:30px 30px 30px 0px"> <?php the_title(); ?></h2>
 <p><?php the_post_thumbnail('medium_large'); ?></p>
 
 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
           <?php the_content( );?>
 
        <?php    // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
            // Previous/next post navigation.
            the_post_navigation( array(
            'prev_text'=> __( '<div style="margin:20px">previous Post: %title</div>' ),
            'next_text'=> __( '<div style="margin:20px">Next Post: %title</div>' ) 
			) );
 
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>