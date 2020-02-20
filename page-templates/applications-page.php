<?php
/**
 * ============== Template Name: Applications Page
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
		<?php if( have_rows('content') ):
	            while ( have_rows('content') ) : the_row();
	        ?>
		<div class="col">
			<h2 class="heading heading_md mr1 ml2"><?php the_sub_field('heading');?></h2>
		</div>
		<div class="col list list__style-line list__min-padding">
			<?php the_sub_field('content');?>
			<a href="<?php the_sub_field('page_link')?>" class="button button__transparent button__border-left button__border-right button__border-primary button__border-round">See Specifications for the PT1</a>
		<div>
			<?php endwhile; endif;?>
	</div>
</div>

<?php get_footer();?>