<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<div style="background-color: #b2c2bf !important;margin-left: -15px;
margin-right: -15px;position: relative;
	left: 15px;
	box-sizing: border-box;
	width: 100%;
	padding-left: 15px;
	padding-right: 15px; height:101.4px;line-height:24px; padding-top:35px;">
		<h2 style="text-align: left;font-family:Open Sans;font-weight:600;font-style:normal;padding:10px"> NEWS </h2>
		</div>
		
	<div class="col-sm-8 blog-main" style="margin-top:20px;">
 
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
 <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium_large'); ?>
    </a></p>
 <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>">
        
    <?php the_title(); ?></a></h2>
 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
 <?php the_excerpt(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>

</div><!-- /.blog-main -->
<div class="text-center" style="margin:15px">
<div style="padding:10px; display:inline"><?php previous_posts_link('Previous') ?></div>
<div style="padding:10px;display:inline"><?php next_posts_link('<button class="btn btn-primary pull-right">Older Posts &nbsp;<i class="fa fa-long-arrow-right"></i></button>') ?></div>
</div>
<?php get_footer(); ?>
