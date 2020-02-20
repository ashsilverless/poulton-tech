<?php
/**
 * ============== Template Name: Contact Page
 *
 * @package poulton
 */
get_header();?>
<?php if( have_rows('hero') ):
    while ( have_rows('hero') ) : the_row();
?>
	<?php get_template_part('template-parts/_hero');?>
<?php endwhile; endif;?>


<div class="container cols-offset-4-16 pt5">
	<div class="col container cols-12 grid-gap">
		<div class="col">
			<h3 class="heading heading__md heading__primary heading__caps font400">Get In Touch</h3>

		</div>
		<div class="col list list__style-line list__min-padding">
			<h3 class="heading heading__md heading__primary heading__caps font400">More Info</h3>
			<div class="pb1"><?php the_field('address', 'options');?></div>
			<div class="font400"><a href="tel:<?php the_field('telephone', 'options');?>"><?php the_field('telephone', 'options');?></a></div>
		<div>
	</div>
</div>

<?php get_footer();?>