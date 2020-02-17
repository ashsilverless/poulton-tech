<?php
/**
 * ============== Template Name: Home Page
 *
 * @package poulton
 */
get_header();?>

    <div id="fullpage">



    	<?php if( have_rows('introducing') ):
    		while ( have_rows('introducing') ) : the_row();
    	?>
    	<?php get_template_part('template-parts/home-intro');?>
    	<?php endwhile; endif;?>


    	<?php if( have_rows('size_&_mass') ):
    		while ( have_rows('size_&_mass') ) : the_row();
    	?>
    	<?php get_template_part('template-parts/home-size_mass');?>
    	<?php endwhile; endif;?>


    	<?php if( have_rows('rugged') ):
    		while ( have_rows('rugged') ) : the_row();
    	?>
    	<?php get_template_part('template-parts/home-rugged');?>
    	<?php endwhile; endif;?>

        
        
        <div class="section" data-anchor="fourth">
            <div class="container align-center">
                <div class="col">
                    PAGE CONTENT 4
                </div>
            </div>
        </div>
    </div>

<div class="image-frame">
    IMAGE
</div>

<?php get_footer();?>